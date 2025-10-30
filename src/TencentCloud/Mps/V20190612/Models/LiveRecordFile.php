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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播录制输出文件信息
 *
 * @method string getUrl() 获取直播录制文件地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置直播录制文件地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取直播录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置直播录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取直播录制文件时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置直播录制文件时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取直播录制文件开始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置直播录制文件开始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取直播录制文件结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置直播录制文件结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveRecordFile extends AbstractModel
{
    /**
     * @var string 直播录制文件地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer 直播录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 直播录制文件时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 直播录制文件开始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 直播录制文件结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $Url 直播录制文件地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 直播录制文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 直播录制文件时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 直播录制文件开始时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 直播录制文件结束时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/862/37710#52)。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
