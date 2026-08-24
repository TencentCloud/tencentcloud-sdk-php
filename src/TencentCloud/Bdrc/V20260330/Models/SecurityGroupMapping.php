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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组映射详情
 *
 * @method string getSecurityGroupMappingId() 获取安全组映射ID
 * @method void setSecurityGroupMappingId(string $SecurityGroupMappingId) 设置安全组映射ID
 * @method string getSitePairId() 获取安全组映射所属的站点对ID
 * @method void setSitePairId(string $SitePairId) 设置安全组映射所属的站点对ID
 * @method string getSourceSecurityGroupId() 获取生产端安全组ID
 * @method void setSourceSecurityGroupId(string $SourceSecurityGroupId) 设置生产端安全组ID
 * @method string getTargetSecurityGroupId() 获取容灾端安全组ID
 * @method void setTargetSecurityGroupId(string $TargetSecurityGroupId) 设置容灾端安全组ID
 * @method string getLifeState() 获取安全组映射的生命状态；NORMAL:正常。
 * @method void setLifeState(string $LifeState) 设置安全组映射的生命状态；NORMAL:正常。
 */
class SecurityGroupMapping extends AbstractModel
{
    /**
     * @var string 安全组映射ID
     */
    public $SecurityGroupMappingId;

    /**
     * @var string 安全组映射所属的站点对ID
     */
    public $SitePairId;

    /**
     * @var string 生产端安全组ID
     */
    public $SourceSecurityGroupId;

    /**
     * @var string 容灾端安全组ID
     */
    public $TargetSecurityGroupId;

    /**
     * @var string 安全组映射的生命状态；NORMAL:正常。
     */
    public $LifeState;

    /**
     * @param string $SecurityGroupMappingId 安全组映射ID
     * @param string $SitePairId 安全组映射所属的站点对ID
     * @param string $SourceSecurityGroupId 生产端安全组ID
     * @param string $TargetSecurityGroupId 容灾端安全组ID
     * @param string $LifeState 安全组映射的生命状态；NORMAL:正常。
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
        if (array_key_exists("SecurityGroupMappingId",$param) and $param["SecurityGroupMappingId"] !== null) {
            $this->SecurityGroupMappingId = $param["SecurityGroupMappingId"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }

        if (array_key_exists("SourceSecurityGroupId",$param) and $param["SourceSecurityGroupId"] !== null) {
            $this->SourceSecurityGroupId = $param["SourceSecurityGroupId"];
        }

        if (array_key_exists("TargetSecurityGroupId",$param) and $param["TargetSecurityGroupId"] !== null) {
            $this->TargetSecurityGroupId = $param["TargetSecurityGroupId"];
        }

        if (array_key_exists("LifeState",$param) and $param["LifeState"] !== null) {
            $this->LifeState = $param["LifeState"];
        }
    }
}
