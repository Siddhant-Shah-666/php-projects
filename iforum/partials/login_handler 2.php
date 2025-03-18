itle  || '';
  if($self->html_css) {
    my $link =
    $self->html_css =~ m/</
     ? $self->html_css # It's a big blob of markup, let's drop it in
     : sprintf(        # It's just a URL, so let's wrap it up
      qq[<link rel="stylesheet" type="text/css" title="pod_stylesheet" href="%s">\n],
      $self->html_css,
    );
    $after =~ s{(</head>)}{$link\n$1}i;  # otherwise nevermind
  }
  $self->_add_top_anchor(\$after);

  if($self->html_javascript) {
    my $link =
    $self->html_javascript =~ m/</
     ? $self->html_javascript # It's a big blob of markup, let's drop it in
     : sprintf(        # It's just a URL, so let's wrap it up
      qq[<script type="text/javascript" src="%s"></script>\n],
      $self->html_javascript,
    );
    $after =~ s{(</head>)}{$link\n$1}i;  # otherwise nevermind
  }

  print {$self->{'output_fh'}}
    $self->html_header_before_title || '',
    $title, # already