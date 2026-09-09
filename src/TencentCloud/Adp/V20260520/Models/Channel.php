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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道信息
 *
 * @method string getChannelId() 获取<p>渠道ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>渠道ID</p>
 * @method integer getChannelStatus() 获取<p>渠道状态（仅B端）：1-未发布，2-运行中，3-已下线（与ConnectStatus互斥）</p>
 * @method void setChannelStatus(integer $ChannelStatus) 设置<p>渠道状态（仅B端）：1-未发布，2-运行中，3-已下线（与ConnectStatus互斥）</p>
 * @method integer getConnectStatus() 获取<p>连接状态（仅C端）：1-初始，2-连接成功，3-连接失败（与ChannelStatus互斥）</p>
 * @method void setConnectStatus(integer $ConnectStatus) 设置<p>连接状态（仅C端）：1-初始，2-连接成功，3-连接失败（与ChannelStatus互斥）</p>
 * @method string getCreateTime() 获取<p>创建时间（Unix秒）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间（Unix秒）</p>
 * @method ChannelSpec getSpec() 获取<p>渠道规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpec(ChannelSpec $Spec) 设置<p>渠道规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间（Unix秒）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间（Unix秒）</p>
 * @method string getUpdater() 获取<p>最后更新人</p>
 * @method void setUpdater(string $Updater) 设置<p>最后更新人</p>
 */
class Channel extends AbstractModel
{
    /**
     * @var string <p>渠道ID</p>
     */
    public $ChannelId;

    /**
     * @var integer <p>渠道状态（仅B端）：1-未发布，2-运行中，3-已下线（与ConnectStatus互斥）</p>
     */
    public $ChannelStatus;

    /**
     * @var integer <p>连接状态（仅C端）：1-初始，2-连接成功，3-连接失败（与ChannelStatus互斥）</p>
     */
    public $ConnectStatus;

    /**
     * @var string <p>创建时间（Unix秒）</p>
     */
    public $CreateTime;

    /**
     * @var ChannelSpec <p>渠道规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Spec;

    /**
     * @var string <p>更新时间（Unix秒）</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>最后更新人</p>
     */
    public $Updater;

    /**
     * @param string $ChannelId <p>渠道ID</p>
     * @param integer $ChannelStatus <p>渠道状态（仅B端）：1-未发布，2-运行中，3-已下线（与ConnectStatus互斥）</p>
     * @param integer $ConnectStatus <p>连接状态（仅C端）：1-初始，2-连接成功，3-连接失败（与ChannelStatus互斥）</p>
     * @param string $CreateTime <p>创建时间（Unix秒）</p>
     * @param ChannelSpec $Spec <p>渠道规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间（Unix秒）</p>
     * @param string $Updater <p>最后更新人</p>
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

        if (array_key_exists("ChannelStatus",$param) and $param["ChannelStatus"] !== null) {
            $this->ChannelStatus = $param["ChannelStatus"];
        }

        if (array_key_exists("ConnectStatus",$param) and $param["ConnectStatus"] !== null) {
            $this->ConnectStatus = $param["ConnectStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new ChannelSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Updater",$param) and $param["Updater"] !== null) {
            $this->Updater = $param["Updater"];
        }
    }
}
