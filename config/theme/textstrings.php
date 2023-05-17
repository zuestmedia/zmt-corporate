<?php

namespace ZMT\Theme\Config\Theme;

class textstrings {

  /**
    * -- Connects translation strings to app folder without textdomain --
    *    1. Because "app" is a git Submodule
    *    2. it's not possible to change TextDomain in submodule for each Theme
    *    based on ZM-Theme-Framework and keeping submodules up-to-date
    */

    public $DownloadZMPlugin;
    public $Toenablethemesettings;
    
    public $Skiptocontent;
    public $WarningVersionsare;

    public $Loadmoreposts;
    public $Loading;
    
    public $AuthorLink_label;
    
    public $CommentsCounter_label;
    public $nocomments;
    public $n_comment;
    public $n_comments;
    
    public $Comments;
    public $says;
    public $s_at_s;
    public $Yourcommentisawaitin;
    public $Yourcommentisawaitin_long;
    
    public $Edit;
    
    public $CommentsPagination_label;
    
    public $Pagination_label;
    
    public $Previous;
    public $Next;
    
    public $Date_label;
    
    public $PageNotFound;
    public $PageNotFound_long;
    public $Home;
    
    public $LinkPages_label;
    public $ContinueReading;
    public $Previouspage;
    public $Nextpage;
    
    public $LastNextArticleLink_label;
    
    public $Menu_default_label;
    
    public $Search_label;
    public $Search_label_close;
    
    public $NavToggle_label;
    
    public $OffcanvasContainer_label_close;
    
    public $ReadMore;
    
    public $Blog;
    public $SearchResultsfor_n;

    function __construct(){

      //Init.php
      $this->DownloadZMPlugin = __( 'Download ZMPlugin', 'zmt-corporate' );
      $this->Toenablethemesettings = __( 'To enable theme settings in Dashboard and Customizer you need ZMPlugin. ZMPlugin is a free WordPress extension to manage theme options and customizer settings of ZM-Theme-Framework based WordPress Themes.', 'zmt-corporate' );

      //Theme.php
      $this->Skiptocontent =      __( 'Skip to content', 'zmt-corporate' );
      $this->WarningVersionsare = __( 'Warning: Versions are not consistent!', 'zmt-corporate' );

      //Render.php
      $this->Loadmoreposts =      __( 'Load more posts', 'zmt-corporate' );
      $this->Loading =      __( 'Loading...', 'zmt-corporate' );

      //modAuthorLink
      $this->AuthorLink_label =  __( 'Author: ', 'zmt-corporate' );

      //modCommentsCounter
      $this->CommentsCounter_label =  __( 'Number of comments: ', 'zmt-corporate' );
      $this->nocomments =      __( 'no comments', 'zmt-corporate' );
      $this->n_comment =       __( '%s comment', 'zmt-corporate' );
      $this->n_comments =      __( '%s comments', 'zmt-corporate' );

      //modCommentsList
      $this->Comments =                  __( 'Comments', 'zmt-corporate' );
      $this->says =                      __( 'says', 'zmt-corporate' );
      $this->s_at_s =                    __( '%1$s at %2$s', 'zmt-corporate' );
      $this->Yourcommentisawaitin =      __( 'Your comment is awaiting moderation.', 'zmt-corporate' );
      $this->Yourcommentisawaitin_long = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.', 'zmt-corporate' );

      //modCommentsList
      //modEditlink
      $this->Edit =       __( 'Edit', 'zmt-corporate' );

      //modCommentsPagination
      $this->CommentsPagination_label = __( 'Comments navigation', 'zmt-corporate' );
      //modPagination
      $this->Pagination_label = __( 'Posts navigation', 'zmt-corporate' );

      //modCommentsPagination
      //modPagination
      $this->Previous = __( 'Previous', 'zmt-corporate' );
      $this->Next =     __( 'Next', 'zmt-corporate' );

      //modDate
      $this->Date_label =  __( 'Post date: ', 'zmt-corporate' );

      //modErrorPage
      $this->PageNotFound =      __( '404 - Page Not Found', 'zmt-corporate' );
      $this->PageNotFound_long = __( 'The page you were looking for could not be found. It might have been removed, renamed, or does not exist anymore. Start again from %s or use the searchform to find what you are looking for.', 'zmt-corporate' );
      $this->Home = __( 'home', 'zmt-corporate' );

      //modLinkPages
      $this->LinkPages_label =  __( 'Post navigation: ', 'zmt-corporate' );
      $this->ContinueReading =  __( 'Continue Reading: ', 'zmt-corporate' );
      $this->Previouspage =     __( 'Previous page', 'zmt-corporate' );
      $this->Nextpage =         __( 'Next page', 'zmt-corporate' );

      //modLastNextArticleLink
      $this->LastNextArticleLink_label =      __( 'Posts navigation', 'zmt-corporate' );

      //modMenu
      $this->Menu_default_label = __( 'Main Menu', 'zmt-corporate' );

      //modSearch
      $this->Search_label =      __( 'Search', 'zmt-corporate' );
      $this->Search_label_close =      __( 'Close search form', 'zmt-corporate' );

      //modNavToggle
      $this->NavToggle_label =      __( 'Open Menu', 'zmt-corporate' );

      //modOffcanvasContainer
      $this->OffcanvasContainer_label_close =      __( 'Close Menu', 'zmt-corporate' );

      //configReadMore
      $this->ReadMore =    __( 'Read More', 'zmt-corporate' );

      //modArchiveTitle
      $this->Blog =               __( 'Blog', 'zmt-corporate' );
      $this->SearchResultsfor_n = __( 'Search Results for "%s"', 'zmt-corporate' );


    }

}
