<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_WARNING);

//Database

$db = array('table_list' => array(
    'archive_documents' => 6,
    'archived_toc' => 26,
    'branch' => 31,
    'captivate' => 6,
    'course_choices' => 10,
    'course_question' => 7,
    'course_question_to_page' => 6,
    'course_server' => 4,
    'course_versions' => 5,
    'document' => 12,
    'document_questions' => 7,
    'document_to_branch' => 3,
    'document_toc' => 10,
    'document_toc_content' => 2,
    'document_toc_history' => 5,
    'document_toc_plan' => 4,
    'documents_comments' => 5,
    'events' => 56,
    'failed_jobs' => 6,
    'google_docs' => 10,
    'institutions' => 11,
    'issues' => 6,
    'jobs' => 7,
    'lookuptable' => 9,
    'migrations' => 3,
    'modules' => 9,
    'modules_copy' => 9,
    'moodle_content' => 5,
    'moodle_documents' => 9,
    'moodle_servers' => 6,
    'moodle_toc' => 7,
    'oauth_access_tokens' => 9,
    'oauth_auth_codes' => 6,
    'oauth_clients' => 10,
    'oauth_personal_access_clients' => 4,
    'oauth_refresh_tokens' => 4,
    'password_resets' => 3,
    'playback_statistics' => 10,
    'profiles' => 12,
    'project_course_choices' => 10,
    'project_course_question' => 6,
    'project_course_question_to_page' => 6,
    'project_data' => 6,
    'project_data_items' => 4,
    'project_map_privileges' => 7,
    'project_privileges' => 10,
    'project_properties' => 7,
    'project_specification' => 4,
    'project_to_branch' => 3,
    'project_to_relation' => 3,
    'project_to_spreadsheet' => 3,
    'project_to_user' => 6,
    'project_type' => 3,
    'project_user_privileges' => 24,
    'projects_dir' => 13,
    'projects_dir_translation' => 4,
    'projects_monitoring' => 18,
    'projects_object_translation' => 6,
    'projects_objects' => 19,
    'projects_planning' => 3,
    'projects_to_documents' => 6,
    'projects_to_procedures' => 3,
    'projects_uploads' => 11,
    'projects_uploads_to_branch' => 3,
    'question_responces' => 11,
    'relation' => 34,
    'relation_address' => 20,
    'relation_contact' => 58,
    'saved_items' => 5,
    'server' => 8,
    'st_audio_file' => 10,
    'st_audio_language' => 3,
    'st_audiomovie' => 5,
    'st_captiontime' => 4,
    'st_course' => 6,
    'st_media' => 11,
    'st_media_copy' => 10,
    'st_module' => 8,
    'st_procedures' => 2,
    'st_scripts' => 5,
    'st_subject' => 5,
    'st_subtitle_properties' => 7,
    'st_text_files' => 5,
    'st_translations' => 4,
    'st_user_preview_stat' => 7,
    'status' => 3,
    'subjects' => 8,
    'subtitles' => 6,
    'tasks_to_planning' => 3,
    'tasks_to_projects' => 3,
    'tbdocuments' => 22,
    'tbdocuments_history' => 16,
    'tbdocuments_privileges' => 21,
    'toc' => 25,
    'tradestar_report_frequency' => 2,
    'tradestar_reports' => 26,
    'tradestar_reports_archive' => 8,
    'tradestar_reports_category' => 2,
    'tradestar_reports_to_employees' => 2,
    'trainees' => 27,
    'trays' => 8,
    'trs_metadata' => 12,
    'types' => 2,
    'uploads' => 15,
    'users' => 11,
    'views' => 5,
    'xoops_shop_languages' => 7,
),
    'structure' => 'eJztPcly5MaOXzD/UOFLyxGaF9p6cUz4oJaq/RQjqWUtPfZcKBaZqqLFYrK5SK35+smVzH1hldpvsQ8OdRG5AUgAiQSQJ9fz49v57Pb44/l8dp822ap4AkkOs34Nqq69n+3MZvdFfj8rqm5nf//H2eXn29nl3fn57Pju9nNydnlyPb+YX97uIjDUKqnSNbifPeGO0mbn7d6Ps9P5p+O7c9oIQ2Ww6lDX97MSVssOfOvwj2sI8xIkGeybFpwlZ6fjgGr7xV2dpx0apCuqFwx0ZIA5WaXVEuQuoKvrs4vj699n/z3/fbaDl/gj+vHu8uzXuzn57f6sysG32QFCwbiyH3+czS9/Obuc/3xWVfD049Dpyd+Pr2/mtz/33cOH//qPExNW86SDGUVomgSiVARTF4kn5frewqZzAoTRCyM76QovWVdp3YGGDGiCe/PDD28EOEQZRvo6bRA7WNs52aZ7qf3Tar6kpdysBE+g9M60r2vQZG2rtIXPhl9bkHUFrEifDr7sYADzsr3gQ0gJ2paN6AJbw7wP6G1RVC1oOveuCtl5p6AE3t1JaZn029nJ96u0/bUHLaZA+I4ne9Cx5wWG3uV7Tdv+8o79+cPB3tvDD0FCYdGkVbai4uAj+VuSeoNMGLhyjzDlU9EWC0zPKqkb+Adiu9a45Df7BJz1fCnt8iMD/RngSdG9hAHCvuqaFzLndp2WJR7/nRH8pG/QDs+EfvffGgHPEaX7dAnOcqFPA7kR6BVsu+MOMVGeYpngmTCBzvMG7Zj9GOCDGODDIOD/LeoM5gIxDuywQcQggJQYEt7MtEC7E2mi5iUcd0OLUPwpDfw4VBr48cgbhOKSwwfhcwAOxuktknj1Clb+iXxKv3lh7prSLakRzJe0q/r1AmtRT2+3eMQcZAVaws7+3q55N31Mq8ez6gHez9YgL/o112qYvXrcfwv+DtIcjycDfKHSSECRwcxAvcy/ZUSMXxNxL8znQJRYf9ujMu4ZLNoVrNW5H3gE+ihFJ1lpGRL3xROZYITN23Zp01HrCOsy/JeGANnGOjBbN9jwFSTknhEo94JILG4C0c3eScgi802yFSwyEHdK+Mo0tdEEJkYSYq7RPPyjX9cd4sxFscTAmM913fifVNstmzQH8n616dE2gw3w9EohkUyqYYWJIxp8/NcH2KxTwWw6MHVEZyfYdcKwKgWLlplFuadTMjs/NRULZf/wbZh9wij8dbCrIkjM2loJXHSltCEM5oDMBNTOF9Chgn+FtWz9iYKF0pEflxyyNRqb795NQiY6CCY1MnS2u29wj9aP2mFQ/PgPwZlv3x/E4BKdVp6wQorzTxCvRsCZSfBGeKHpTOJ5y+luGCbqQ9vB0eFhDN7QVFvERYrMfrvnxBxrFOAteCgQ4jBY64Y7xV6FW69XAWHC4cGI369HQaji+P8X9n4Fcu3Iir1olx6YbI8SZmlp2jRGaINbyQgH1nVAZ6BLi1L2yUzy7+1qq/Cx1NHBXpjcGjDJBXm0c3UUXjbuUDSriaCyYv1KNautv6+uwQadqwJQeycG/3Teu3GCb29/Pw7xSOuKXpdNEC9qT9qniy5eVGD+491UuaoCdoUhfpzd3Zxd/jL7eHs9n3swZNYLs+vP/5N8+nx9cXz78+nvl8cXZycOjGVRuBJ8uT5Hluq9Vo2VMNPRJAw6WBdZqx5VM7hmNxrq70wgyz+jc13XCzrs0DDQEz/9Wv1vGuF3BRTZvYqRXJ0lwyJ2Qhh2ADApI3nKzg0ZPc1V0XaweYliqc5zy4H0QwlfAHACEWWD6EtsV+s53cwK2zkwS3ioy5QdqJgP10qqBtQuw11FjvgNPDl4QF6UMItdYchd3v/u2NlGi2+TcRdGHSdJo4QaPlbyARMHcGnDDQRl8wuXVuaW26E+QR9btJ0uhqVr3H3kZgANJ2QwapbiRctiFvuuVKxKLFTlrs8DUrWeEcVqfA2Uy55Bmy5A81iCzr6KBrR96fjepUsnFhqQJcyFwAhP8VICJPZWgr/MisGad29wATOIP9ynZwQDGpAnixdrR1k68oXBx4HO32iiRUpUjgUmbdtiWaFhAL+JHBSaKEcODWfetHa7cddpi1aAUAmb3A056EVlKOYHS2skb54YKsQpFsQFPZCIs758qDK6PRsAs6xvEu8ijC4AY5c1OvLCCt8cm/pjS0EL6ejNrxMs75vUYiq/2+MdLfHlx/3soYRpp3krEfEQ2rG/w74H2kebB4f1skabqOhbcvlusFgoED5vlUhPu68WshXIHn0nzH6BtYpM42fYPDZEpNgWkjUAa2sucRwC/7Eu0I4oe58vcZ0WVYLx47opZUpG1RBo06WIwE8uK88biVEWyIBvCtB6Dm9rkKDF5y/YSVM8FFnKfZqGxXOsJDmsgNLAriL5npLhbUpTGqJOs8eiWob0PoAGddyuipqi3t/zCGtV9GtkxameUAUIERVtuAygfWmhK9NLDeIc4CabbCAMyn1XUt3qeY+CofMoB7qPb0tZztpsMN5we9pw/Dq7OSNNlWEIGFWmDIJp1uHjDTYZZth5xwAEG2IAmle5CDJYEeNMuE7lEIOOVUH+UED+EEEEjboj/muAGMwQ1slolnid0WE+1Qdk/6Ax/4ALwaIVBHBfUXXstm6riusQYkidfD4/x2PgAdeLo6SvCnzzl2SFZGN97UEP4prU6QvSLvl43gttCL5lgDl7YpsyFNE7sjVA/LKudUPw5O76GuEjuT27mN/cHl9cTTa90VT41H7Wp6YScAnhsiTxjvGhjo7jdYAjWLLHTCq2RPYWUgfImAIeH63idTF2hiPe7J+JD4EH5jm9hzFO7mTVrcvJPtl2OIUGBl8dfdjfexu0bYuq7YquV5ywkftWvdVHhkfglsDoSbNuWuOURslMa4wjK4ouYtqGOAUcFTNtdOxT22DsevXSFtg5H40Cbe91DQAR+DebqJpQEwUaB2U3pgGg30PcFW3bg+ksj88Oo9gzNTL5aCM4BOGnJffiMRrmn5YaG5kNTP1PwfJkMyDtOmQyihGnhxYeQPsT3y9STGvconktnpCRgP0aZnAbsV2ARk1DVAzGekKwh+9awDesaygyX4HEJYSPfd1Rnw2m9BnCYFCgLw+G9QDTAyjpVVZI7wx6+QarVNPtMhuTdPOFnqiHwLt9U9DgCHngA73pGnQW5N2OPhc3ZHIO8QHSH4ksBWjqfi2ZDzj2dyX0jqcbjp+d4c/hG1/xPe+GLkjuaXdsN8VNvC6W1FGkGqOBMmFoP00uLNIO3416rwsCbDFLTErc5qGpC9NFJHNAqV4xo1wRTEIrvOe2PQbVOWizpqjjT32vouxGxe5DEyzzpOMhGTG33WQPMYKixslIm1EKE2NfINoryGM+gwzWL3/x1V98tT2+YhFcwj08PwVvwaXgu+bjQyln0j1jWPMb+xHdLvOFxXhl/8G7vfdh+o5iTck2tSHCgjN/CojukDHHrwU7XAgQiYdkWRg2uhRrcpfepM9K3iKakfYjR7H2QQ9HDdoh+ej/dYS9EfT5SfpTDEFpbGGcR00m0AcjGfFFji9uHD4CH0ydipe+RpBzmJkMqdi4LgHXZNBdvghvImEMuocoLVs4iEPaiGxuzZVwhaBEhHwJTkgXmNEZeeSYn+6UtEg+Q0RH590k0X7Ig6NQ+QfTvlslaZaBtk0I5wp7RrqdDtTiJn2r6YqykAhmU8lx/k3NxYYsLNB6bRAmTaF0l6xw2OuYJuBbXTTIZkgd9452i8NAuYQhf7Q7ODVewd5g4+P/YYhXYBuJAoEss0WiTyPPayGaImDiqTxkU06/TGgB2h9dON11WyZHiM66yJtEFh3DtwBFkJWaddq2z7DJfXB/iijw7XJG/Ij9HRSHPYUPzWifyJehu/pPQbplpckw6ZEM4zq8mnlrhGjAA5JOq60obVGL6HFpgZ28jjyVaSIvOlHmPRJEXdAriOVBoOCLhiGyFpnW5TQpajo2bN1zQlCpzDwhkx5xR9fwGhgr05dFmj0m+Ba2aLsiC3SsRvlx+hrfLAWBDhOqYVtMd1p3sENSgnc2rY8VRCf/op5u7ZIOcvBUZJuYzABU/wCaTzwGGZhmUIMDqfGavvZA1Ii7AiO8Bi83EOeZbuEi28ekD0XTam61CM4iPqXpzdlCk7rIlATMSN5C6wCLVM3LjOxk47gLtUrKawefaO44xRnvDkH+7puNcfW4w7R9NSjkARaDqXYp3YCvd/jk6UJ/FQH5Zy0C8n4/zJ+rUPpfphhINMZ+2gvLNbYg7K+CHyYfd2C0JscpmkkqZ03iX0Id3lIbmg9KlQn+W9dUInRQiqnUwpTW6WzQgDL1qiV5CQH1AMxZnhxrojIxT33H+mlSeIs8gQ6sWxM5cWzNFJoGY65MF6z6ZwQ4Zb7wyyDjmswY5/NhSQrmuZqbGoi0KXHWaY0IXTwh62IZqdR9yczGfSSJJTQ2dR44E8vwPUwAGLGcA+D4iXzDuz4ZgfTvccXcNpNSraX8m0m+KxsVt0hBU6xB6pVt4/Cu6ok66o25mDl4SPtSWJUFnhlrc/Og7OuN8+ux8yvSiHnRONe0nYTxkY6wBk1XcDrqsmtDagaVlaGjysdYY0EMlp4cAOotTo2TgbFVTQw5R0EGXUJe0WXPzk4ViSoCnbJ1j1Abl7rgw7Q1yITkSlHD4U9BmqerwzRUSPprGLdsl2+nldrxKRBDpR1fyLdJQouTkwWyUGfHI47DLviFEbmFt3V5HGI6bp24bY0TldsVSaMJKWRCQK1f/Sn+joIlQ9c2evNp2pptiAuaUb9FNpfTbCxXqZ5Nr0TFmUD0Kvhhds9G6CJn9y3iCne4uUAgnRhNNN7/tDteGxoIhSfaaE7usJ6eqKRIc9GGctjEzw3qKRCWFWwIA87J8wChPZM6hiQwuPQVPWSzQNa329pvABY2fjg20QA4aptW4JkUbwgGJigOhqbLCwbP/a8wSL1HIJq3a0H5EL5iAh2+ZAIesWYCH7Fo2n/Eqmn1m6QplivLiwuDLkP4LOFYu8MJCJ+rIGCvKGMSBS6bdE38DfJ13OCBcJUPjJBg7By0WWlAm1EbEKvtPT4QSxtb0dmQKWgZMelxxpdzNPaAj0Qg203BKm0TUjeEFEBxsqKSqkHVtrlKob2C0HAFjcalbl1XRRMMxdDsAIt35UbzDsZR1W7JJJZvXFk6XuCFQ1iNfLPhIKyE1+2UjAdxLpuYTZiyVdHBhvBUTJkKrBLTPOdlD/Uo2BDXNlzggH7TURztw7I3/Y4mviiJg1f+3ZfIUgbF3d8P1Xt8vg23J0sNMveMNZbC04AWcG390iOVYfmY08dGrOQR6ugZv9MyTp46XKPs+G52fptAmm01dZez5pKMlF7hEne5y8PIOqq8DyDhkhCeXUBXNEV8bPPwwHEbd2qAmlY1rDAhieoJ4qjS55KFifz2mrk/4p5qvV3JqlCoFofdJl/7ogFGpQgTXqXXyQEJNT0clE2wOUFkq7ujgUfcYCtQ1klheE8HDbRCI2V9Jy/zWw1bz1M39y8BMDB5LnKc2+QD62mVDXV2tM6mAc/kZslL8Nfme1w2t4pVgT7i6+VYQ4wBoUYZvYMbC+TuDoGedOAd/pe35lgcNjo48ZnOMKeiVnfYdpSioC6jM6iGIr5aAUzX+c3sYNeO8JSDrcyxt65UNF0Gk2F7RcU8Zm8MPnjmJ0HDlu70WxYOGrfg4bGQ8QBEfpIljVFp0LBIz95GegWHdDZKjrCzlrvx9o+yKBmTBbZ6alET0Lb4v0HI4h5/siyDdunKIyZgkpZ0e3ZdZyBlVV7OKfIE96eEFzqPNptcXQ+cNPEOiaDqlS6QSN/yOw18uJi7ozB8DOFfNMpwKxGWmtHri7IceMUeXKl5XrSgSl25xART6qpievSaqUqxR89NK1koYt9rBf20H3abKF8hGu/9rJGuAMsLRQ4i4uHhjk9u59czNOgMd1jtG+jFRsLH0bQSArBxkamgLk4+n4gyK7DVl+Nb52NIxhpZ2tC4Kix54dIB5Pt+0rcdXINGdhUGLuOa44++sTlWXTM0luAvYQcka9za5IYchFwruLs+n0I3jDyp6YeopudwKZZsOIxqfKVddQa3t7zJGtRWe6U1qNUFLjJ+zDMkAkiGH+6NasBgncwudureFSyKK6QUHeJH4TVchz3xdoA/tbvKcG/ai9CHgVgm+TQe24vAGB8D0QRaly4V13+cQKxxEp06ypv37/Z51gCD425WJ7RenNX81AHrs+36nJ79bMt8TnHGbFE94fwMnGbXRUSuieplONPKnLAj/3uAwgSgNNoRCDZWa6IV9sQBdnUdM+k0MvQypCrtSPI3jNkpsGkXBTe6Oj2+n1EiiubLvhn6RNWrJgel1irwDW+t3TV89rzibWriecfb1MTzkrfWRHvP21QkUkee91VvA75ZIplt52gtyHOVZ5VdpBnAP/c2tz8Ho1qbcJjLokZm0GXAc98hgblXxw/usU59ALguZ4FFj1T3UziEvtn72x7+j1Ux7YKBZfkjbtpd467cTEIMRbh3BNR5r5WjjG4TQXywWnSPjcokM1WPszXqL0cNOLJqgP7Kt9MXlvfb6amoiq5Iy1YWB1N6WiIxiTcP7SS4j7WMJLpXY2gZ6IaRG6VEqisv0binLDZfFE23ylNbXtPAPX2VyY4kc4Gtn/b29qXpYYsC2VbJfviKeJOD8CYruFgUAUcfIwrUm5fwluS6vHA9oCNBQi7gzQ/0gAdiczFTxLiph0drSPASvgp+CQBX6lwEH+ZIu4MJDfmqO/1UFXwi0/o42KCTB/GIFt16DRdFucka1u2UMy1v/ZKuINygfQrLDVq3j5JzPb69WCdjAvXT9VMBnkVbJrqTGjTrom2J+HLKdLUD1PgRCMbih8B2OOZamO9B6DExrR4doS5yNUQrvvuF4PaPWu4ggCEVGFGNG/AAGtXkDBsWScQlbF7YM3IBng3sOs/DwddFhQOI0ZkW9I5LEwzWQZIj40czDrzDFQ9S5TE/6RboaG//iF5WEtsEX2km6QOaSeofoBb9YLZHc4gGp/cILehwSIJabcPaPQv9jGzGdfOh6xKNKiZsMecFq05vv+x9wBEbsnNn3xCD8LxKuzataxEnBqRILgz3wWSgZNFm5ksMTZBWLzloH52nKrtTZFe079VLAeZeO8sTfnIxOT2UDsSWySdmoWFLa0e32zR42r+pR8n9oTh2phyh2hQ/7CHkbysXMVstwBNRUOrPqdoiYOMfoTQSLb0cdVNIm0iJQCb5dHalP7xkgsML9T8RphVcM6X9agWfDUB6PpQJSo8rNUDFXPUJ2PDe74Xd7rVIIPV5AZOHYngsxuR6NDyRjpTlcNjEbRzXnfh9Eg/IR4D22S15etV4sJlXuePrieFNeXY95Rz1uO9W0KHN7/hdrvXA9Qnh7bgsUtFj4KWyyY+kVst5txdHQE6KKCI+FTmArhubMALrq1N4mMRyPNGgNT7mrtj5xikiHA9riCz9KBycC0s0hW/gd3cu9WJqGo+TuBv7pXHbUWYKrYRpwSLGoDDjaboU2Sspse3pW8ekijt+GTcQY6DyCL4FWPoMTyxvHIyn1Etnk5u8WlIYKYorbvg70s57sVNbqPgFf0XI3dybYHPCH4i2vme5AVrwqSeNwgqWdpf+RClFIJrM4dPguDKKSneY2q03LBxD0S3qgqJW0qn7qndMl5K0jS0edfADMF0TbAtsSlnhvaG/yPva5N0e6Rg+IshGURigo6ziapB2Nip4uVtN+rI+Hz/Gx/ko8DpCTw2TDsTx1fh0+2vMitIlLtgyMxm9dOc77/KEE6uVBOJZNapyt2ivjHPZGf/ehqXXcnb9p1Po22OYfkGSwrRiTYHoeIBiCIc52h2BsHByJxyu1bxsYC9ahUZAcmTUC28bYTNYisrSCEN4KtiINBjUlCklDA6dTiUMWaRQKBoRimwBU3qJThbp9tYhbskhyp2LjsZlaYMiH8Mn0JTpC37ylMZhW6UZm7iKMzqycNqU5rw7zmwyAsfszTiWHufk5kKpf+mBNPUMNOmYy85U43R2x/PLFmQfq7kA8IUWiQ+gOLpDP5/littKPMaSC7Cczc6JIGNdefsGtJeFqXXfnbEbQ1F+3J/ZgycX3rfAaUUq+FGH42lXUEjTCEF9SxHqmoRnUfRbT8UmP1Z82eCwFfRqQu/EB0k3eDiUd2FPMoop1P79HxNVgY2l3l0NArIiv8d7U9yY2OBqJfzGxBigZDrPnRfiTfafcOmyfUR3aftIkzWnZBXj1k6sTUgrniL8xlWw7LmoVeiTtKWcblbuIGgli9BnYJULZwxHExTzsKr/uAE/SLlOyLjKMHEUeYuM4MdOfal2OXnytXoknOYCykGdNh09dcenJuAeeLbB1PYdrItMoXl443SpHs2C22rHaGsICIXWayU5G7CIG1cQAQbjBsUQGWkG85eNwlA0msNbAwN8wwVfq7rnxcW4IUw+wL6zfMlYXprxG6621mBbS/xEtlULnUca0vyxLqSWxseFd6XtN2aAYEyPdXUZ5vHnT2iI2/lvtxSOcdqOwHYGIMJROyN36SDju9sSH20qiJJVgdDbvEx6l/rfQiZFiJ8ASWOH04VKkPxwiYoAqcDyjTFUQPk6gk36fHiycCSXEOq4yg0Y9ap7w12j7YbvIoU9R3CmgG+6HyaWLPUW4grIXBm2kw3AkNuv2fjfs9z84K93f7YUnBcO5Mw6dUF5rc2QyvU8A79YFCXJqdLCz/fNz4HrR6mw6v9BdWF4jQ9XghePOHVDoaNVGCDi9X6jkgDUzy7uT5HDzVF65mJCkzYsfw5+S7vTS+9ce3/dGM01Ol2cYbC0KJ81HO3NDz+8EeDG6hWChPaF2Wo6Qi44Y5lW8wUHEktV6LQK2qaZ9nUNmqxVPJwlfDb82oLMX7QD8vAVx0sVQo0MZ1wcaFtYecHoTagXbFFULXDXglrwuTtATu11fDkI886xG0w3KKnymzuxtUrbX4e3zexwMQGCAh/v8i3mcxe+e//+4Ohd2CbHhVjQSaVh9bcSIe7atvepbjP49z682qFemeWQkE2mHHiZwKA9sQIMas4LmtpiyBjcR5i/COdMA8SJpitMdaMYsHalaTQsGPCxEn5iio/g0yRGjbPiQ3PmkBVXafaYLpH94AI6a5MvAfYofjPFWVOCzZmGiFhy15jhm5AUDu6ysmv/IA8lPq7CxpM3m2YZsvx8NbmH3BV31SRaMNwJtIRYWyjVcjNYa2UX2x6pB4QW2Lg5jcgQ7CEwHWKoh8D0RZALdoXiNADUvGy+d1XhxwTRSDJeMGxsElc3LKzwniZjEoxEYlViWfN3eoQPFTYc3CNtOJhDkolgDmnDQcLEDYcOkzccWhM4pogkTewFsYOA3sGUNSBnx/Dja5F/NPJjInj4xpcN2e+nGbETXygTQyt8aUU4Y57TU1OX6qE6mfPducDZFxWIjHMxZNAHnOHFFX/CNQ8uvaWcb0g9Az8cjgQP6C0tTXV7+OdfWHGBYSMa9CbiLWvtkNP05fPDR5y1bwG40qJ0TLO8Qmdu1Houp4abID81uFa5g8HvWTmagL4sZbZUsAsl4doEcyPmFZsAjs8uPD08emNTbw3pxya4q/SlTks3zJfPZ1duiN/OlXJOBtOrwjEwoHOZVVhKdLWSFqHPGAkU+M1l5iFGRto3N4GYjjdEXQtFLbl0J/uB+Rnp3hg+jath34XleaX9T28PDo8O3oeFTKBuX75D9mEDMoCTX5Nt5Svqrqa2leKkomI2ABCs2X+Zi/mmTdagS8fnngNVuMNFz3OTC+1tSqMpRHac4qsyAiLZHwJWkvAJ95A+J9vo6bASaPb5cnZ3dYpxeXJ3fY3QktyeXcxvbo8vrqhf1l/4u2jxg1DOM5K3RJHXm7YlEwoN47iHwDPRjTlnud8ps9DqXkfKog1itrQXhBwNyVCrfr2okFI/1/kxIrqLhJVu1kXdL8qiXUnCS3NgDi5Hr8wNFc6vE5fGQ+eMYWYG3fAAyxxPmB6PjU66ot0AuU36nBgkTkQPJEgWVPhzPilBnkZ7sjreOA2eJcbLNcQ53V5BieCup+9JpcBSzJ4kTRP+Lk8I+1ge9AwcDz+NgksDJkpCPQ3a+bNDNhEj4wBhk84NXN9D0YBF2sp3DzEd1EWW9M1EaiJtCB8e0GayZ8UFvczXJpQvxnIQlMWmPZAStxXweefftVAHS5NACNBF0CB9FLihdscI+ZoFO75BWLf4XaB68JwOb72zf4ZGHSl1Fw9M4UaszF4OxvK0FqBiLR1M3pnC4NDmzDrZaWmo9UNsWyTh+AsXh6aQAVJuir5yEFyOR8LQeAo9/S05P7785e74l/lNcnl8McdEJMjxlnrYN9t8/w87d3JS',
    'contents' => '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',
    'database' => 'nts_projects',
);


//Settings
$settings = array();
$settings['execute'] = '';

?>
    <style>
        html {
            background: #336699;
        }

        body {
            padding: 10px;
            background: #fff;
            font: 12px "Lucida Grande";
            color: #333;
        }

        #title {
            font-size: 18px;
        }

        #layout {
            width: 500px;
            border: 1px solid #ccc;
            border-bottom: 0px;
            background: #eee;
            margin-top: 10px;
        }

        #layout .title {
            background: #ff9900;
            color: #fff;
            font-size: 16px;
        }

        #layout div {
            padding: 10px;
            border: 1px solid #fff;
            border-bottom: 1px solid #ccc;
            min-height: 20px;
        }

        #layout span {
            width: 200px;
            display: block;
            float: left;
        }

        #doc {
            float: right;
            margin-right: 30px;
            width: 300px;
            border: 1px solid #ccc;
            background: #eee;
            padding: 10px;
            color: #999;
        }

        #list {
            background: #fff;
            border: 1px solid #ccc;
        }

        #list th {
            background: #ff9900;
            color: #fff;
            font-size: 13px;
        }

        #list td {
            background: #eee;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-left: 1px solid #fff;
            padding: 5px;
            font-size: 11px;
        }

        #copyright {
            margin-top: 20px;
            font-size: 11px;
        }

        fieldset {
            margin-top: 20px;
            border: 0px;
            padding: 0px;
            border: 1px solid #999;
            background: #ddd;
        }

        input[type='text'],
        textarea {
            border: 1px solid #aaa;
            margin: 1px;
            padding: 5px;
            font-family: Helvetica;
            font-size: 14px;
            width: 250px;
            color: #333;
        }

        input[type='text']:focus,
        textarea:focus {
            border: 1px solid #6699cc;
        }

        button {
            display: block;
            margin: 0 7px 0 0;
            background-color: #f5f5f5;
            border: 1px solid #d3d3d3;
            border-top: 1px solid #e9e9e9;
            border-left: 1px solid #e9e9e9;
            font-family: "Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
            font-size: 100%;
            line-height: 130%;
            text-decoration: none;
            font-weight: bold;
            color: #565656;
            cursor: pointer;
            padding: 5px 10px 6px 7px;
        }

        button:hover {
            border: 1px solid #ccc;
            color: #ff6600;
            background: white;
        }

        .error {
            border: 1px solid #990000;
            background: #ffeeee;
            padding: 5px;
            margin: 5px;
        }
    </style>
<?php
set_time_limit(300); // 5 minutes
ob_start();

$GLOBALS['HTTP_VARS'] = $_GET + $_POST;

function get($key)
{
    if (isset($GLOBALS['HTTP_VARS'][$key]))
        return $GLOBALS['HTTP_VARS'][$key];
}

function byte($size)
{
    $unim = array("B", "KB", "MB", "GB", "TB", "PB");
    $i = 0;
    while ($size >= 1024) {
        $i++;
        $size = $size / 1024;
    }
    return number_format($size, ($i ? 2 : 0), ",", ".") . " " . $unim[$i];
}

function myFlush()
{
    ob_end_flush();
    ob_flush();
    flush();
    ob_start();
}

if (get('dump') && isset($db)) {

    $structure = base64_decode($db['structure']);
    $structure = gzuncompress($structure);

    $sql = base64_decode($db['contents']);
    $sql = gzuncompress($sql);
    echo "Dump database <b>{$db['database']}</b><br/></br><textarea style=\"width:100%;padding:10px;\" rows=\"30\">$structure\n$sql</textarea>";
    exit;
}

$dir = get('dir');
$overwrite = get('overwrite');
$install = get('install');

//se install
if ($install) {

    if (empty($dir)) {
        $dir = '/';
    } else {
        if (substr($dir, -1) != '/')
            $dir .= '/';
    }

    $execute = isset($settings['execute']) ? $dir . $settings['execute'] : $dir;

//    if ($dir != "" && substr($dir, -1) != "/")
//        $dir .= "/";

//    if ($dir != '' && !file_exists($dir))
//        mkdir($dir);


    if (get('db')) {

        $db_hostname = get('db_hostname');
        $db_username = get('db_username');
        $db_password = get('db_password');
        $db_database = get('db_database');

        $dbc = mysqli_connect($db_hostname, $db_username, $db_password);

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        // create database if not exist
        mysqli_query($dbc, "CREATE DATABASE IF NOT EXISTS {$db_database}") or die(mysqli_error($dbc));

        // Change db to provided db
        mysqli_select_db($dbc, $db_database) or die(mysqli_error($dbc));

        $db_installed = false;
        $error = false;

        $sql = base64_decode($db['structure']);
        $sql = gzuncompress($sql);
        $query = explode(";\r", $sql);

        echo "<br/><br/><h3>DATABASE: CREATE STRUCTURE</h3>";

        for ($i = 0; $i < count($query); $i++) {
            list($table, $rows) = each($db['table_list']);
            echo "<div>$table ($rows rows)";
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font>' . mysqli_error($dbc);
                } else
                    echo " - OK";
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";
        $error = false;

        $sql = base64_decode($db['contents']);
        $sql = gzuncompress($sql);
        $query = explode(";\n", $sql);

        echo "<br/><br/><hr><h3>DATABASE: INSERT CONTENT</h3>";
        for ($i = 0; $i < count($query); $i++) {
            if ($query[$i]) {
                if (!mysqli_query($dbc, $query[$i])) {
                    $error = true;
                    echo ' - <font color="red">ERROR</font> ' . mysqli_error($dbc) . " <div class=\"error\">" . $query[$i] . "</div>";
                }
            }
            echo "</div>";
            myFlush();
        }
        if ($error)
            echo "<div>Some errors encountered</div>";

        mysqli_close($dbc);
        $db_installed = true;

        if ($db_installed) {

            echo "Database Installed";

            $webroot = parse_url(trim($dir))['path'];

            if (empty($webroot)) {
                $webroot = '/';
            } else {
                if (substr($webroot, -1) != '/')
                    $webroot .= '/';
            }

            //------------------------------------------
            // Open config file
            //------------------------------------------
            $fp = fopen("Boot.php", "w");
            $settings_file = "<?php" . "\n";
            $settings_file .= "\n" . "//Settings" . "\n";

            $settings_file .= "\n" . "class Boot {";
            $settings_file .= "\n" . " const DBHOST = '$db_hostname';";
            $settings_file .= "\n" . " const DBUSER =  '$db_username';";
            $settings_file .= "\n" . " const DBPASS = '$db_password';";
            $settings_file .= "\n" . " const DBNAME = '$db_database';";
            $settings_file .= "\n" . " const WWWROOT = '$webroot'; ";

            $settings_file .= "\n" . "}";

            fwrite($fp, $settings_file, strlen($settings_file));
            fclose($fp);
            chmod($settings_file, 0777);

            $fp_env = fopen("nts-video-api/.env", "w");
            $env_file = "APP_NAME=Video" . "\n";
            $env_file .= "APP_KEY=base64:ZoDFmAT6ev1keCiVRo+O4yHkQg940mEBk3zp+ABM5cs=" . "\n";
            $env_file .= "APP_URL=$dir/nts-video-api/public";
            $env_file .= "\n\n" . "LOG_CHANNEL=stack";
            $env_file .= "\n\n" . "DB_CONNECTION=mysql";
            $env_file .= "\n" . "DB_HOST=$db_hostname";
            $env_file .= "\n" . "DB_PORT=3306";
            $env_file .= "\n" . "DB_USERNAME=$db_username";
            $env_file .= "\n" . "DB_PASSWORD=$db_password";
            $env_file .= "\n" . "DB_DATABASE=$db_database";
            $env_file .= "\n" . "QUEUE_CONNECTION=database";
            fwrite($fp_env, $env_file, strlen($env_file));
            fclose($fp_env);
            myFlush();
        }
    }

    echo " <br><hr><h1>Installation Complete!";

    if ($execute)
        echo "<a href=\"{$execute}\">Click here to go {$execute}</a>.";
} else {
    ?>
    <body>
    <!-- created with PHP Installer -->
    <div id="title">nts-programs</div>

    <div id="layout">
        <form action="" method="POST">
            <div class="title">Installation</div>
            <div>
                <span>Install path</span>
                <input type="text" name="dir"
                       value="http://<?php echo $_SERVER['HTTP_HOST'] . pathinfo($_SERVER['REQUEST_URI'])['dirname']; ?>">
            </div>
            <input type="hidden" name="db" value="1">
            <div>
                Database settings
                <fieldset id="db_fieldset">
                    <div><span>Database Hostname</span>
                        <input type="text" name="db_hostname" value="">
                    </div>
                    <div><span>Database Username</span>
                        <input type="text" name="db_username" value="">
                    </div>
                    <div><span>Database Password</span>
                        <input type="text" name="db_password" value="">
                    </div>
                    <div><span>Database Name</span>
                        <input type="text" name="db_database" value="<?php echo $db['database']; ?>">
                    </div>
                    <div>
                        <a href="?dump=1" target="_blank">Click here to download the database for manual installing.</a>
                    </div>
                </fieldset>
            </div>
            <div>
                <input type="checkbox" name="install" id="install"> <label for="install">Confirm installation.</label>
            </div>
            <div>
                <button>INSTALL</button>
            </div>
        </form>
    </div>
    <br/>
    Database in the package
    <table cellspacing="0" cellpadding="5" id="list">
        <thead>
        <th>Table</th>
        <th>Rows</th>
        </thead>
        <?php
        foreach ($db['table_list'] as $table => $n)
            echo "<tr><td>$table</td><td>{$n}</td></tr>";
        ?>
    </table>
    </body>
    <?php
}
?>