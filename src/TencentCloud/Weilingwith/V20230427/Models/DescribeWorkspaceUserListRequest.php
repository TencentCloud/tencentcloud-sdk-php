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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWorkspaceUserList请求参数结构体
 *
 * @method integer getOffset() 获取翻页页码
 * @method void setOffset(integer $Offset) 设置翻页页码
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method string getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
 * @method string getApplicationToken() 获取token
 * @method void setApplicationToken(string $ApplicationToken) 设置token
 * @method string getTenantId() 获取租户ID
 * @method void setTenantId(string $TenantId) 设置租户ID
 * @method integer getUpdateAt() 获取更新时间戳，单位秒
 * @method void setUpdateAt(integer $UpdateAt) 设置更新时间戳，单位秒
 */
class DescribeWorkspaceUserListRequest extends AbstractModel
{
    /**
     * @var integer 翻页页码
     */
    public $Offset;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var string 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var string token
     */
    public $ApplicationToken;

    /**
     * @var string 租户ID
     */
    public $TenantId;

    /**
     * @var integer 更新时间戳，单位秒
     */
    public $UpdateAt;

    /**
     * @param integer $Offset 翻页页码
     * @param integer $Limit 翻页大小
     * @param string $WorkspaceId 工作空间ID
     * @param string $ApplicationToken token
     * @param string $TenantId 租户ID
     * @param integer $UpdateAt 更新时间戳，单位秒
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
