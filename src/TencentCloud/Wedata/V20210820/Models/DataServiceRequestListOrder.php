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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据服务通用排序参数
 *
 * @method string getName() 获取排序参数名称
取值： 
  CreateTime 表示按照创建时间排序
  ModifyTime 表示按照更新时间排序
 * @method void setName(string $Name) 设置排序参数名称
取值： 
  CreateTime 表示按照创建时间排序
  ModifyTime 表示按照更新时间排序
 * @method string getDirection() 获取排序参数顺序
 * @method void setDirection(string $Direction) 设置排序参数顺序
 */
class DataServiceRequestListOrder extends AbstractModel
{
    /**
     * @var string 排序参数名称
取值： 
  CreateTime 表示按照创建时间排序
  ModifyTime 表示按照更新时间排序
     */
    public $Name;

    /**
     * @var string 排序参数顺序
     */
    public $Direction;

    /**
     * @param string $Name 排序参数名称
取值： 
  CreateTime 表示按照创建时间排序
  ModifyTime 表示按照更新时间排序
     * @param string $Direction 排序参数顺序
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
