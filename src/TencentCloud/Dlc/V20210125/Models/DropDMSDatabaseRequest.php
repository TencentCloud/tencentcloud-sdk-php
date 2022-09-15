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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDMSDatabase请求参数结构体
 *
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 * @method boolean getDeleteData() 获取是否删除数据
 * @method void setDeleteData(boolean $DeleteData) 设置是否删除数据
 * @method boolean getCascade() 获取是否级联删除
 * @method void setCascade(boolean $Cascade) 设置是否级联删除
 */
class DropDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @var boolean 是否删除数据
     */
    public $DeleteData;

    /**
     * @var boolean 是否级联删除
     */
    public $Cascade;

    /**
     * @param string $Name 数据库名称
     * @param boolean $DeleteData 是否删除数据
     * @param boolean $Cascade 是否级联删除
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

        if (array_key_exists("DeleteData",$param) and $param["DeleteData"] !== null) {
            $this->DeleteData = $param["DeleteData"];
        }

        if (array_key_exists("Cascade",$param) and $param["Cascade"] !== null) {
            $this->Cascade = $param["Cascade"];
        }
    }
}
