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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteStarProject请求参数结构体
 *
 * @method string getInstanceID() 获取实例ID：****-1792
 * @method void setInstanceID(string $InstanceID) 设置实例ID：****-1792
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 */
class DeleteStarProjectRequest extends AbstractModel
{
    /**
     * @var string 实例ID：****-1792
     */
    public $InstanceID;

    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @param string $InstanceID 实例ID：****-1792
     * @param integer $ID 项目ID
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
