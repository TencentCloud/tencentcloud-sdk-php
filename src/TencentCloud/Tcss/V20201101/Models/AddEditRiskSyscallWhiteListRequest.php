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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEditRiskSyscallWhiteList请求参数结构体
 *
 * @method string getEventId() 获取仅在添加事件白名单时候使用
 * @method void setEventId(string $EventId) 设置仅在添加事件白名单时候使用
 * @method RiskSyscallWhiteListInfo getWhiteListInfo() 获取增加或编辑白名单信。新增白名单时WhiteListInfo.id为空，编辑白名单WhiteListInfo.id不能为空.
 * @method void setWhiteListInfo(RiskSyscallWhiteListInfo $WhiteListInfo) 设置增加或编辑白名单信。新增白名单时WhiteListInfo.id为空，编辑白名单WhiteListInfo.id不能为空.
 */
class AddEditRiskSyscallWhiteListRequest extends AbstractModel
{
    /**
     * @var string 仅在添加事件白名单时候使用
     */
    public $EventId;

    /**
     * @var RiskSyscallWhiteListInfo 增加或编辑白名单信。新增白名单时WhiteListInfo.id为空，编辑白名单WhiteListInfo.id不能为空.
     */
    public $WhiteListInfo;

    /**
     * @param string $EventId 仅在添加事件白名单时候使用
     * @param RiskSyscallWhiteListInfo $WhiteListInfo 增加或编辑白名单信。新增白名单时WhiteListInfo.id为空，编辑白名单WhiteListInfo.id不能为空.
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("WhiteListInfo",$param) and $param["WhiteListInfo"] !== null) {
            $this->WhiteListInfo = new RiskSyscallWhiteListInfo();
            $this->WhiteListInfo->deserialize($param["WhiteListInfo"]);
        }
    }
}
