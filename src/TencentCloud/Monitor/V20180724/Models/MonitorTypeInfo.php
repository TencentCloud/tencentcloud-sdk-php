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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控类型详细信息
 *
 * @method string getId() 获取监控类型ID
 * @method void setId(string $Id) 设置监控类型ID
 * @method string getName() 获取监控类型
 * @method void setName(string $Name) 设置监控类型
 * @method integer getSortId() 获取排列顺序
 * @method void setSortId(integer $SortId) 设置排列顺序
 */
class MonitorTypeInfo extends AbstractModel
{
    /**
     * @var string 监控类型ID
     */
    public $Id;

    /**
     * @var string 监控类型
     */
    public $Name;

    /**
     * @var integer 排列顺序
     */
    public $SortId;

    /**
     * @param string $Id 监控类型ID
     * @param string $Name 监控类型
     * @param integer $SortId 排列顺序
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SortId",$param) and $param["SortId"] !== null) {
            $this->SortId = $param["SortId"];
        }
    }
}
