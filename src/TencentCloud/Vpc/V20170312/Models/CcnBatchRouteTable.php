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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云联网路由表信息
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method string getName() 获取云联网路由表名称。
 * @method void setName(string $Name) 设置云联网路由表名称。
 * @method string getDescription() 获取云联网路由表描述。
 * @method void setDescription(string $Description) 设置云联网路由表描述。
 */
class CcnBatchRouteTable extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var string 云联网路由表名称。
     */
    public $Name;

    /**
     * @var string 云联网路由表描述。
     */
    public $Description;

    /**
     * @param string $CcnId 云联网ID。
     * @param string $Name 云联网路由表名称。
     * @param string $Description 云联网路由表描述。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
