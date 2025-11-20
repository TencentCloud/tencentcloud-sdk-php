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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserDirectory请求参数结构体
 *
 * @method integer getId() 获取目录id
 * @method void setId(integer $Id) 设置目录id
 * @method array getUserOrgSet() 获取ioa分组信息
 * @method void setUserOrgSet(array $UserOrgSet) 设置ioa分组信息
 */
class ModifyUserDirectoryRequest extends AbstractModel
{
    /**
     * @var integer 目录id
     */
    public $Id;

    /**
     * @var array ioa分组信息
     */
    public $UserOrgSet;

    /**
     * @param integer $Id 目录id
     * @param array $UserOrgSet ioa分组信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("UserOrgSet",$param) and $param["UserOrgSet"] !== null) {
            $this->UserOrgSet = [];
            foreach ($param["UserOrgSet"] as $key => $value){
                $obj = new UserOrg();
                $obj->deserialize($value);
                array_push($this->UserOrgSet, $obj);
            }
        }
    }
}
