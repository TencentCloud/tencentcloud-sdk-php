<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关键词在文本中的定位信息

Position为关键词在文本中的偏移量，从0开始。例如，给定文本结果"欢迎收看新闻三十分”，以及关键词"新闻三十分"，那么StartPosition的值为4，EndPosition的值为9
 *
 * @method integer getIndex() 获取文本结果数组中的下标
 * @method void setIndex(integer $Index) 设置文本结果数组中的下标
 * @method integer getStartPosition() 获取关键词在文本中出现的起始偏移量(包含)
 * @method void setStartPosition(integer $StartPosition) 设置关键词在文本中出现的起始偏移量(包含)
 * @method integer getEndPosition() 获取关键词在文本中出现的结束偏移量(不包含)
 * @method void setEndPosition(integer $EndPosition) 设置关键词在文本中出现的结束偏移量(不包含)
 */
class TextAppearInfo extends AbstractModel
{
    /**
     * @var integer 文本结果数组中的下标
     */
    public $Index;

    /**
     * @var integer 关键词在文本中出现的起始偏移量(包含)
     */
    public $StartPosition;

    /**
     * @var integer 关键词在文本中出现的结束偏移量(不包含)
     */
    public $EndPosition;

    /**
     * @param integer $Index 文本结果数组中的下标
     * @param integer $StartPosition 关键词在文本中出现的起始偏移量(包含)
     * @param integer $EndPosition 关键词在文本中出现的结束偏移量(不包含)
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("StartPosition",$param) and $param["StartPosition"] !== null) {
            $this->StartPosition = $param["StartPosition"];
        }

        if (array_key_exists("EndPosition",$param) and $param["EndPosition"] !== null) {
            $this->EndPosition = $param["EndPosition"];
        }
    }
}
