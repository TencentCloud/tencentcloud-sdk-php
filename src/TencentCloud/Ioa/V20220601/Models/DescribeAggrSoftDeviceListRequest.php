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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAggrSoftDeviceList请求参数结构体
 *
 * @method Condition getCondition() 获取过滤条件
 * @method void setCondition(Condition $Condition) 设置过滤条件
 * @method string getName() 获取软件名
 * @method void setName(string $Name) 设置软件名
 * @method integer getOsType() 获取0:win 2:mac
 * @method void setOsType(integer $OsType) 设置0:win 2:mac
 */
class DescribeAggrSoftDeviceListRequest extends AbstractModel
{
    /**
     * @var Condition 过滤条件
     */
    public $Condition;

    /**
     * @var string 软件名
     */
    public $Name;

    /**
     * @var integer 0:win 2:mac
     */
    public $OsType;

    /**
     * @param Condition $Condition 过滤条件
     * @param string $Name 软件名
     * @param integer $OsType 0:win 2:mac
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }
    }
}
