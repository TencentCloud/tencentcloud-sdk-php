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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述许可证的详细信息。
 *
 * @method string getContent() 获取许可证内容
 * @method void setContent(string $Content) 设置许可证内容
 * @method array getConditionSet() 获取许可证允许信息列表
 * @method void setConditionSet(array $ConditionSet) 设置许可证允许信息列表
 * @method array getForbiddenSet() 获取许可证要求信息列表
 * @method void setForbiddenSet(array $ForbiddenSet) 设置许可证要求信息列表
 * @method array getPermissionSet() 获取许可证禁止信息列表
 * @method void setPermissionSet(array $PermissionSet) 设置许可证禁止信息列表
 */
class LicenseDetail extends AbstractModel
{
    /**
     * @var string 许可证内容
     */
    public $Content;

    /**
     * @var array 许可证允许信息列表
     */
    public $ConditionSet;

    /**
     * @var array 许可证要求信息列表
     */
    public $ForbiddenSet;

    /**
     * @var array 许可证禁止信息列表
     */
    public $PermissionSet;

    /**
     * @param string $Content 许可证内容
     * @param array $ConditionSet 许可证允许信息列表
     * @param array $ForbiddenSet 许可证要求信息列表
     * @param array $PermissionSet 许可证禁止信息列表
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ConditionSet",$param) and $param["ConditionSet"] !== null) {
            $this->ConditionSet = [];
            foreach ($param["ConditionSet"] as $key => $value){
                $obj = new LicenseRestriction();
                $obj->deserialize($value);
                array_push($this->ConditionSet, $obj);
            }
        }

        if (array_key_exists("ForbiddenSet",$param) and $param["ForbiddenSet"] !== null) {
            $this->ForbiddenSet = [];
            foreach ($param["ForbiddenSet"] as $key => $value){
                $obj = new LicenseRestriction();
                $obj->deserialize($value);
                array_push($this->ForbiddenSet, $obj);
            }
        }

        if (array_key_exists("PermissionSet",$param) and $param["PermissionSet"] !== null) {
            $this->PermissionSet = [];
            foreach ($param["PermissionSet"] as $key => $value){
                $obj = new LicenseRestriction();
                $obj->deserialize($value);
                array_push($this->PermissionSet, $obj);
            }
        }
    }
}
