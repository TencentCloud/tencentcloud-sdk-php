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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResourcePrivilegeDetail
 *
 * @method PrivilegeResource getResource() 获取资源
 * @method void setResource(PrivilegeResource $Resource) 设置资源
 * @method array getSubjectDetails() 获取主体
 * @method void setSubjectDetails(array $SubjectDetails) 设置主体
 * @method array getPermissionDetails() 获取权限详情
 * @method void setPermissionDetails(array $PermissionDetails) 设置权限详情
 */
class ResourcePrivilegeDetail extends AbstractModel
{
    /**
     * @var PrivilegeResource 资源
     */
    public $Resource;

    /**
     * @var array 主体
     */
    public $SubjectDetails;

    /**
     * @var array 权限详情
     */
    public $PermissionDetails;

    /**
     * @param PrivilegeResource $Resource 资源
     * @param array $SubjectDetails 主体
     * @param array $PermissionDetails 权限详情
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PrivilegeResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("SubjectDetails",$param) and $param["SubjectDetails"] !== null) {
            $this->SubjectDetails = [];
            foreach ($param["SubjectDetails"] as $key => $value){
                $obj = new SubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectDetails, $obj);
            }
        }

        if (array_key_exists("PermissionDetails",$param) and $param["PermissionDetails"] !== null) {
            $this->PermissionDetails = [];
            foreach ($param["PermissionDetails"] as $key => $value){
                $obj = new PrivilegeInfo();
                $obj->deserialize($value);
                array_push($this->PermissionDetails, $obj);
            }
        }
    }
}
