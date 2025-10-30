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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 升级包类型详细信息
 *
 * @method integer getCreateTime() 获取模块创建时间
 * @method void setCreateTime(integer $CreateTime) 设置模块创建时间
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getName() 获取模块名称
 * @method void setName(string $Name) 设置模块名称
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getFwType() 获取模块类型
 * @method void setFwType(string $FwType) 设置模块类型
 * @method boolean getIsBuildIn() 获取是否系统内置升级包类型
 * @method void setIsBuildIn(boolean $IsBuildIn) 设置是否系统内置升级包类型
 * @method string getRemark() 获取模块描述
 * @method void setRemark(string $Remark) 设置模块描述
 */
class OtaModuleInfo extends AbstractModel
{
    /**
     * @var integer 模块创建时间
     */
    public $CreateTime;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 模块名称
     */
    public $Name;

    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 模块类型
     */
    public $FwType;

    /**
     * @var boolean 是否系统内置升级包类型
     */
    public $IsBuildIn;

    /**
     * @var string 模块描述
     */
    public $Remark;

    /**
     * @param integer $CreateTime 模块创建时间
     * @param string $ProductName 产品名称
     * @param string $Name 模块名称
     * @param string $ProductID 产品ID
     * @param string $FwType 模块类型
     * @param boolean $IsBuildIn 是否系统内置升级包类型
     * @param string $Remark 模块描述
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("IsBuildIn",$param) and $param["IsBuildIn"] !== null) {
            $this->IsBuildIn = $param["IsBuildIn"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
