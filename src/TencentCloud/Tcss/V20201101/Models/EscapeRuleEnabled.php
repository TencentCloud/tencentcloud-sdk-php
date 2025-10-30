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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改容器逃逸扫描策略开关信息
 *
 * @method string getType() 获取规则类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
 * @method void setType(string $Type) 设置规则类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
 * @method boolean getIsEnable() 获取是否打开：false否 ，true是
 * @method void setIsEnable(boolean $IsEnable) 设置是否打开：false否 ，true是
 */
class EscapeRuleEnabled extends AbstractModel
{
    /**
     * @var string 规则类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
     */
    public $Type;

    /**
     * @var boolean 是否打开：false否 ，true是
     */
    public $IsEnable;

    /**
     * @param string $Type 规则类型
   ESCAPE_CGROUPS：利用cgroup机制逃逸
   ESCAPE_TAMPER_SENSITIVE_FILE：篡改敏感文件逃逸
   ESCAPE_DOCKER_API：访问Docker API接口逃逸
   ESCAPE_VUL_OCCURRED：逃逸漏洞利用
   MOUNT_SENSITIVE_PTAH：敏感路径挂载
   PRIVILEGE_CONTAINER_START：特权容器
   PRIVILEGE：程序提权逃逸
     * @param boolean $IsEnable 是否打开：false否 ，true是
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
