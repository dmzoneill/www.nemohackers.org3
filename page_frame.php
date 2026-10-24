<?php

/**
 * Shared page frame (head, left menu column and footer) for the nemohackers.org pages.
 */

/**
 * Prints the page head, the left menu column and the opening of the titled content box.
 *
 * @param string $title Title shown in the content box header.
 */
function renderPageTop(string $title): void
{
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 TRANSITIONAL//EN">
<HTML>
<HEAD>
<TITLE>[ nemo hackers ]</TITLE>
    <?php require __DIR__ . '/META.PHP'; ?>
    <?php require __DIR__ . '/HEADER.PHP'; ?>

<!--start the individual page-->

<TABLE BGCOLOR="#000000" BORDER="0" CELLPADDING="5" CELLSPACING="0" WIDTH="750"><TR>

<TD BGCOLOR="#000000" VALIGN="top" WIDTH="160">
<!-- corners -->

<TABLE BGCOLOR="#024070" BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="160">

<TR BGCOLOR=""><TD>
<TABLE BGCOLOR="#024070" BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="160">
<TR>
<TD WIDTH=3><IMG SRC="./images/tleftblue1agif.gif" BORDER=0></TD>
<TD BGCOLOR="#024070" WIDTH="154">
<CENTER><CENTER><b>Menu</b></CENTER></CENTER></TD>
<TD WIDTH=3><IMG SRC="./images/trightblue1agif.gif" BORDER=0></TD>
</TR>
</TABLE>
</TR>

<TR BGCOLOR="#1c1f22">

<TD WIDTH="160" BGCOLOR="#1c1f22" CELLPADDING="2">

<TABLE BORDER="0" CELLPADDING="4" CELLSPACING="0" WIDTH="100%">

<TR CLASS="small">

<TD BGCOLOR="#1C1F22" HEIGHT="426" VALIGN="top">

<CENTER>

    <?php require __DIR__ . '/MENU.PHP'; ?>

</CENTER>

</TD></TR></TABLE>
    <?php renderBottomCorners(); ?>

</TD></TR></TABLE></TD>

<!------------eend left column--------------->

<!------------rright column--------------->

<TD BGCOLOR="#000000" VALIGN="top">

<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="100%">

<TR VALIGN="top"><TD BGCOLOR="#000000">

<!------------------11111111111111111111111111------------------>

<!------------------11111111111111111111111111------------------>

<TABLE BGCOLOR="#000000" BORDER="0" CELLPADDING="0" CELLSPACING="1" WIDTH="100%">

<TR BGCOLOR="#000000">

<TD BGCOLOR="#000000">

<TABLE BGCOLOR="#024070" BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="*">
<TR>
<TD WIDTH=3><IMG SRC="./images/tleftblue1agif.gif" BORDER=0></TD>
<TD BGCOLOR="#024070" WIDTH="754">
<CENTER><B><?php echo $title; ?></B></CENTER></TD>
<TD WIDTH=3><IMG SRC="./images/trightblue1agif.gif" BORDER=0></TD>
</TR>
</TABLE>

</TD>

</TR>

<TR BGCOLOR=#24252f>

<TD>

<TABLE BORDER=0 CELLPADDING=4 CELLSPACING=0 WIDTH="100%">

<TR CLASS=small><TD BGCOLOR="#1C1F22">
    <?php
}

/**
 * Prints the closing of the content box and the page footer.
 */
function renderPageBottom(): void
{
    ?>

</TD>

</TR>
</TABLE>

    <?php renderBottomCorners(); ?>

</TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE></TD></TR></TABLE>

</TD></TR></TABLE></TD></TR></TABLE>

<TABLE BGCOLOR=#000000 BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=750 HEIGHT=2>

<TR BGCOLOR="#024070" HEIGHT=2><TD BGCOLOR="#024070" HEIGHT=2></TD></TR></TABLE>

    <?php require __DIR__ . '/FOOTER.PHP'; ?>

<BR>
    <?php
}

/**
 * Prints the rounded bottom corners that close a grey box.
 */
function renderBottomCorners(): void
{
    ?>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="0" WIDTH="*">
<TR>
<TD WIDTH=3><IMG SRC="./images/bleftdgrey1agif.gif" BORDER=0></TD>
<TD WIDTH="754" BGCOLOR="1C1F22">
<TD WIDTH=3><IMG SRC="./images/brightdgrey1agif.gif" BORDER=0></TD>
</TR>
</TABLE>
    <?php
}
