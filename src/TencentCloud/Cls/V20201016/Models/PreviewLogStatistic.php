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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预览数据详情
 *
 * @method string getLogContent() 获取日志内容
 * @method void setLogContent(string $LogContent) 设置日志内容
 * @method integer getLineNum() 获取行号
 * @method void setLineNum(integer $LineNum) 设置行号
 * @method string getDstTopicId() 获取目标日志主题
 * @method void setDstTopicId(string $DstTopicId) 设置目标日志主题
 * @method string getFailReason() 获取失败错误码， 空字符串""表示正常
 * @method void setFailReason(string $FailReason) 设置失败错误码， 空字符串""表示正常
 * @method string getTime() 获取日志时间戳
 * @method void setTime(string $Time) 设置日志时间戳
 * @method string getDstTopicName() 获取目标topic-name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstTopicName(string $DstTopicName) 设置目标topic-name
注意：此字段可能返回 null，表示取不到有效值。
 */
class PreviewLogStatistic extends AbstractModel
{
    /**
     * @var string 日志内容
     */
    public $LogContent;

    /**
     * @var integer 行号
     */
    public $LineNum;

    /**
     * @var string 目标日志主题
     */
    public $DstTopicId;

    /**
     * @var string 失败错误码， 空字符串""表示正常
     */
    public $FailReason;

    /**
     * @var string 日志时间戳
     */
    public $Time;

    /**
     * @var string 目标topic-name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstTopicName;

    /**
     * @param string $LogContent 日志内容
     * @param integer $LineNum 行号
     * @param string $DstTopicId 目标日志主题
     * @param string $FailReason 失败错误码， 空字符串""表示正常
     * @param string $Time 日志时间戳
     * @param string $DstTopicName 目标topic-name
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LogContent",$param) and $param["LogContent"] !== null) {
            $this->LogContent = $param["LogContent"];
        }

        if (array_key_exists("LineNum",$param) and $param["LineNum"] !== null) {
            $this->LineNum = $param["LineNum"];
        }

        if (array_key_exists("DstTopicId",$param) and $param["DstTopicId"] !== null) {
            $this->DstTopicId = $param["DstTopicId"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("DstTopicName",$param) and $param["DstTopicName"] !== null) {
            $this->DstTopicName = $param["DstTopicName"];
        }
    }
}
