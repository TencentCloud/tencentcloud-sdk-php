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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchAssignVLPlanChannels请求参数结构体
 *
 * @method string getVLPlanId() 获取<p>计划 ID</p>
 * @method void setVLPlanId(string $VLPlanId) 设置<p>计划 ID</p>
 * @method integer getCmd() 获取<p>操作命令：1=关联，2=解绑</p>
 * @method void setCmd(integer $Cmd) 设置<p>操作命令：1=关联，2=解绑</p>
 * @method array getChannelIds() 获取<p>通道 ID 列表，最多 500 个；与 OrganizationIds 至少传一个（Cmd=1 时）</p>
 * @method void setChannelIds(array $ChannelIds) 设置<p>通道 ID 列表，最多 500 个；与 OrganizationIds 至少传一个（Cmd=1 时）</p>
 * @method array getOrganizationIds() 获取<p>组织 ID 列表（仅 Cmd=1 时有效，Cmd=2 时不允许传入）；展开该组织下所有通道参与关联，与 ChannelIds 取并集去重</p>
 * @method void setOrganizationIds(array $OrganizationIds) 设置<p>组织 ID 列表（仅 Cmd=1 时有效，Cmd=2 时不允许传入）；展开该组织下所有通道参与关联，与 ChannelIds 取并集去重</p>
 */
class BatchAssignVLPlanChannelsRequest extends AbstractModel
{
    /**
     * @var string <p>计划 ID</p>
     */
    public $VLPlanId;

    /**
     * @var integer <p>操作命令：1=关联，2=解绑</p>
     */
    public $Cmd;

    /**
     * @var array <p>通道 ID 列表，最多 500 个；与 OrganizationIds 至少传一个（Cmd=1 时）</p>
     */
    public $ChannelIds;

    /**
     * @var array <p>组织 ID 列表（仅 Cmd=1 时有效，Cmd=2 时不允许传入）；展开该组织下所有通道参与关联，与 ChannelIds 取并集去重</p>
     */
    public $OrganizationIds;

    /**
     * @param string $VLPlanId <p>计划 ID</p>
     * @param integer $Cmd <p>操作命令：1=关联，2=解绑</p>
     * @param array $ChannelIds <p>通道 ID 列表，最多 500 个；与 OrganizationIds 至少传一个（Cmd=1 时）</p>
     * @param array $OrganizationIds <p>组织 ID 列表（仅 Cmd=1 时有效，Cmd=2 时不允许传入）；展开该组织下所有通道参与关联，与 ChannelIds 取并集去重</p>
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
        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
