<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件拆分信息
 *
 * @method boolean getAppendTitleToChunk() 获取在对文件拆分时，配置是否将 Title 追加到切分后的段落后面一并 Embedding。取值如下所示：
false：不追加。
true：将段落 Title 追加到切分后的段落。

 * @method void setAppendTitleToChunk(boolean $AppendTitleToChunk) 设置在对文件拆分时，配置是否将 Title 追加到切分后的段落后面一并 Embedding。取值如下所示：
false：不追加。
true：将段落 Title 追加到切分后的段落。

 * @method boolean getAppendKeywordsToChunk() 获取在对文件拆分时，配置是否将关键字 keywords 追加到切分后的段落一并 Embedding。取值如下所示：
false：不追加。
true：将全文的 keywords 追加到切分后的段落。

 * @method void setAppendKeywordsToChunk(boolean $AppendKeywordsToChunk) 设置在对文件拆分时，配置是否将关键字 keywords 追加到切分后的段落一并 Embedding。取值如下所示：
false：不追加。
true：将全文的 keywords 追加到切分后的段落。
 */
class KnowledgeSplitterPreprocess extends AbstractModel
{
    /**
     * @var boolean 在对文件拆分时，配置是否将 Title 追加到切分后的段落后面一并 Embedding。取值如下所示：
false：不追加。
true：将段落 Title 追加到切分后的段落。

     */
    public $AppendTitleToChunk;

    /**
     * @var boolean 在对文件拆分时，配置是否将关键字 keywords 追加到切分后的段落一并 Embedding。取值如下所示：
false：不追加。
true：将全文的 keywords 追加到切分后的段落。

     */
    public $AppendKeywordsToChunk;

    /**
     * @param boolean $AppendTitleToChunk 在对文件拆分时，配置是否将 Title 追加到切分后的段落后面一并 Embedding。取值如下所示：
false：不追加。
true：将段落 Title 追加到切分后的段落。

     * @param boolean $AppendKeywordsToChunk 在对文件拆分时，配置是否将关键字 keywords 追加到切分后的段落一并 Embedding。取值如下所示：
false：不追加。
true：将全文的 keywords 追加到切分后的段落。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppendTitleToChunk",$param) and $param["AppendTitleToChunk"] !== null) {
            $this->AppendTitleToChunk = $param["AppendTitleToChunk"];
        }

        if (array_key_exists("AppendKeywordsToChunk",$param) and $param["AppendKeywordsToChunk"] !== null) {
            $this->AppendKeywordsToChunk = $param["AppendKeywordsToChunk"];
        }
    }
}
