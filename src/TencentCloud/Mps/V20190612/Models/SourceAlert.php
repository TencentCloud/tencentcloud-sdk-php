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
 * 线性组装Location告警信息
 *
 * @method string getSourceId() 获取Source ID。
 * @method void setSourceId(string $SourceId) 设置Source ID。
 * @method string getSourceName() 获取Source名称。
 * @method void setSourceName(string $SourceName) 设置Source名称。
 * @method integer getCode() 获取告警事件码。
 * @method void setCode(integer $Code) 设置告警事件码。
 * @method string getCategory() 获取告警分类。
 * @method void setCategory(string $Category) 设置告警分类。
 * @method string getMessage() 获取告警消息。
 * @method void setMessage(string $Message) 设置告警消息。
 * @method integer getLastModifiedTime() 获取更新时间。
 * @method void setLastModifiedTime(integer $LastModifiedTime) 设置更新时间。
 */
class SourceAlert extends AbstractModel
{
    /**
     * @var string Source ID。
     */
    public $SourceId;

    /**
     * @var string Source名称。
     */
    public $SourceName;

    /**
     * @var integer 告警事件码。
     */
    public $Code;

    /**
     * @var string 告警分类。
     */
    public $Category;

    /**
     * @var string 告警消息。
     */
    public $Message;

    /**
     * @var integer 更新时间。
     */
    public $LastModifiedTime;

    /**
     * @param string $SourceId Source ID。
     * @param string $SourceName Source名称。
     * @param integer $Code 告警事件码。
     * @param string $Category 告警分类。
     * @param string $Message 告警消息。
     * @param integer $LastModifiedTime 更新时间。
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("LastModifiedTime",$param) and $param["LastModifiedTime"] !== null) {
            $this->LastModifiedTime = $param["LastModifiedTime"];
        }
    }
}
