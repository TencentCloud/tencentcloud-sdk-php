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
namespace TencentCloud\Tsi\V20210325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同传结果数据
 *
 * @method string getSeId() 获取句子 ID
 * @method void setSeId(string $SeId) 设置句子 ID
 * @method integer getSeVer() 获取句子版本号
 * @method void setSeVer(integer $SeVer) 设置句子版本号
 * @method string getSourceText() 获取识别结果
 * @method void setSourceText(string $SourceText) 设置识别结果
 * @method string getTargetText() 获取 翻译结果
 * @method void setTargetText(string $TargetText) 设置 翻译结果
 * @method integer getStartTime() 获取句子开始时间
 * @method void setStartTime(integer $StartTime) 设置句子开始时间
 * @method integer getEndTime() 获取句子结束时间
 * @method void setEndTime(integer $EndTime) 设置句子结束时间
 * @method boolean getIsEnd() 获取 当前句子是否已结束
 * @method void setIsEnd(boolean $IsEnd) 设置 当前句子是否已结束
 */
class DisplayInfo extends AbstractModel
{
    /**
     * @var string 句子 ID
     */
    public $SeId;

    /**
     * @var integer 句子版本号
     */
    public $SeVer;

    /**
     * @var string 识别结果
     */
    public $SourceText;

    /**
     * @var string  翻译结果
     */
    public $TargetText;

    /**
     * @var integer 句子开始时间
     */
    public $StartTime;

    /**
     * @var integer 句子结束时间
     */
    public $EndTime;

    /**
     * @var boolean  当前句子是否已结束
     */
    public $IsEnd;

    /**
     * @param string $SeId 句子 ID
     * @param integer $SeVer 句子版本号
     * @param string $SourceText 识别结果
     * @param string $TargetText  翻译结果
     * @param integer $StartTime 句子开始时间
     * @param integer $EndTime 句子结束时间
     * @param boolean $IsEnd  当前句子是否已结束
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
        if (array_key_exists("SeId",$param) and $param["SeId"] !== null) {
            $this->SeId = $param["SeId"];
        }

        if (array_key_exists("SeVer",$param) and $param["SeVer"] !== null) {
            $this->SeVer = $param["SeVer"];
        }

        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IsEnd",$param) and $param["IsEnd"] !== null) {
            $this->IsEnd = $param["IsEnd"];
        }
    }
}
