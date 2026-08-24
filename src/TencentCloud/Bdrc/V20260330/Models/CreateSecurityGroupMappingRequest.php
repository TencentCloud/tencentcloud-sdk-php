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
 * CreateSecurityGroupMapping请求参数结构体
 *
 * @method string getSrcSecurityGroupId() 获取生产端实例绑定的安全组ID
 * @method void setSrcSecurityGroupId(string $SrcSecurityGroupId) 设置生产端实例绑定的安全组ID
 * @method string getTargetSecurityGroupId() 获取容灾端实例绑定的安全组ID
 * @method void setTargetSecurityGroupId(string $TargetSecurityGroupId) 设置容灾端实例绑定的安全组ID
 * @method string getSitePairId() 获取安全组映射所属的站点对ID。
 * @method void setSitePairId(string $SitePairId) 设置安全组映射所属的站点对ID。
 */
class CreateSecurityGroupMappingRequest extends AbstractModel
{
    /**
     * @var string 生产端实例绑定的安全组ID
     */
    public $SrcSecurityGroupId;

    /**
     * @var string 容灾端实例绑定的安全组ID
     */
    public $TargetSecurityGroupId;

    /**
     * @var string 安全组映射所属的站点对ID。
     */
    public $SitePairId;

    /**
     * @param string $SrcSecurityGroupId 生产端实例绑定的安全组ID
     * @param string $TargetSecurityGroupId 容灾端实例绑定的安全组ID
     * @param string $SitePairId 安全组映射所属的站点对ID。
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
        if (array_key_exists("SrcSecurityGroupId",$param) and $param["SrcSecurityGroupId"] !== null) {
            $this->SrcSecurityGroupId = $param["SrcSecurityGroupId"];
        }

        if (array_key_exists("TargetSecurityGroupId",$param) and $param["TargetSecurityGroupId"] !== null) {
            $this->TargetSecurityGroupId = $param["TargetSecurityGroupId"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }
    }
}
