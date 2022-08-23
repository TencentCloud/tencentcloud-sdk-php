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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线日志详细信息
 *
 * @method integer getLogTime() 获取日志打包开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTime(integer $LogTime) 设置日志打包开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取子域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置子域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取原始大小 单位byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置原始大小 单位byte
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogPacketName() 获取日志数据包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogPacketName(string $LogPacketName) 设置日志数据包名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 * @method void setArea(string $Area) 设置加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
 */
class L7OfflineLog extends AbstractModel
{
    /**
     * @var integer 日志打包开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTime;

    /**
     * @var string 子域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 原始大小 单位byte
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 日志数据包名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogPacketName;

    /**
     * @var string 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
     */
    public $Area;

    /**
     * @param integer $LogTime 日志打包开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 子域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 原始大小 单位byte
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogPacketName 日志数据包名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 加速区域，取值有：
<li>mainland：中国大陆境内;</li>
<li>overseas：全球（不含中国大陆）。</li>
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
        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LogPacketName",$param) and $param["LogPacketName"] !== null) {
            $this->LogPacketName = $param["LogPacketName"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
