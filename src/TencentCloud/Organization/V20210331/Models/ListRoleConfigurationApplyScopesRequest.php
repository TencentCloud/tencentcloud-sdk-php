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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRoleConfigurationApplyScopes请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID</p>
 * @method string getPrincipalId() 获取<p>身份 ID</p>
 * @method void setPrincipalId(string $PrincipalId) 设置<p>身份 ID</p>
 * @method string getPrincipalType() 获取<p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
 * @method void setPrincipalType(string $PrincipalType) 设置<p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
 * @method integer getTargetUin() 获取<p>目标账号 UIN</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>目标账号 UIN</p>
 * @method string getFilter() 获取<p>过滤条件</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件</p>
 * @method integer getMaxResults() 获取<p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
 * @method string getNextToken() 获取<p>翻页游标</p>
 * @method void setNextToken(string $NextToken) 设置<p>翻页游标</p>
 */
class ListRoleConfigurationApplyScopesRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>身份 ID</p>
     */
    public $PrincipalId;

    /**
     * @var string <p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
     */
    public $PrincipalType;

    /**
     * @var integer <p>目标账号 UIN</p>
     */
    public $TargetUin;

    /**
     * @var string <p>过滤条件</p>
     */
    public $Filter;

    /**
     * @var integer <p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     */
    public $MaxResults;

    /**
     * @var string <p>翻页游标</p>
     */
    public $NextToken;

    /**
     * @param string $ZoneId <p>空间 ID</p>
     * @param string $PrincipalId <p>身份 ID</p>
     * @param string $PrincipalType <p>身份类型</p><p>枚举值：</p><ul><li>User： 用户</li><li>Group： 用户组</li></ul>
     * @param integer $TargetUin <p>目标账号 UIN</p>
     * @param string $Filter <p>过滤条件</p>
     * @param integer $MaxResults <p>每页条数</p><p>取值范围：[1, 100]</p><p>默认值：10</p>
     * @param string $NextToken <p>翻页游标</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
