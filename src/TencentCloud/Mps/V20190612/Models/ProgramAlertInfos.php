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
 * 线性组装program告警信息详情。
 *
 * @method string getChannelId() 获取<p>频道ID。</p>
 * @method void setChannelId(string $ChannelId) 设置<p>频道ID。</p>
 * @method string getChannelName() 获取<p>频道名称。</p>
 * @method void setChannelName(string $ChannelName) 设置<p>频道名称。</p>
 * @method string getProgramId() 获取<p>ProgramName。</p>
 * @method void setProgramId(string $ProgramId) 设置<p>ProgramName。</p>
 * @method string getProgramName() 获取<p>ProgramName。</p>
 * @method void setProgramName(string $ProgramName) 设置<p>ProgramName。</p>
 * @method integer getCode() 获取<p>告警事件码。</p>
 * @method void setCode(integer $Code) 设置<p>告警事件码。</p>
 * @method string getCategory() 获取<p>告警分类。</p>
 * @method void setCategory(string $Category) 设置<p>告警分类。</p>
 * @method string getMessage() 获取<p>告警消息。</p>
 * @method void setMessage(string $Message) 设置<p>告警消息。</p>
 * @method integer getLastModifiedTime() 获取<p>更新时间。</p>
 * @method void setLastModifiedTime(integer $LastModifiedTime) 设置<p>更新时间。</p>
 */
class ProgramAlertInfos extends AbstractModel
{
    /**
     * @var string <p>频道ID。</p>
     */
    public $ChannelId;

    /**
     * @var string <p>频道名称。</p>
     */
    public $ChannelName;

    /**
     * @var string <p>ProgramName。</p>
     */
    public $ProgramId;

    /**
     * @var string <p>ProgramName。</p>
     */
    public $ProgramName;

    /**
     * @var integer <p>告警事件码。</p>
     */
    public $Code;

    /**
     * @var string <p>告警分类。</p>
     */
    public $Category;

    /**
     * @var string <p>告警消息。</p>
     */
    public $Message;

    /**
     * @var integer <p>更新时间。</p>
     */
    public $LastModifiedTime;

    /**
     * @param string $ChannelId <p>频道ID。</p>
     * @param string $ChannelName <p>频道名称。</p>
     * @param string $ProgramId <p>ProgramName。</p>
     * @param string $ProgramName <p>ProgramName。</p>
     * @param integer $Code <p>告警事件码。</p>
     * @param string $Category <p>告警分类。</p>
     * @param string $Message <p>告警消息。</p>
     * @param integer $LastModifiedTime <p>更新时间。</p>
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
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
