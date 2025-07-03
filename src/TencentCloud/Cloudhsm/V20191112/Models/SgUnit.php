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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组基础信息
 *
 * @method string getSgId() 获取安全组Id
 * @method void setSgId(string $SgId) 设置安全组Id
 * @method string getSgName() 获取安全组名称
 * @method void setSgName(string $SgName) 设置安全组名称
 * @method string getSgRemark() 获取备注
 * @method void setSgRemark(string $SgRemark) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class SgUnit extends AbstractModel
{
    /**
     * @var string 安全组Id
     */
    public $SgId;

    /**
     * @var string 安全组名称
     */
    public $SgName;

    /**
     * @var string 备注
     */
    public $SgRemark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $SgId 安全组Id
     * @param string $SgName 安全组名称
     * @param string $SgRemark 备注
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("SgId",$param) and $param["SgId"] !== null) {
            $this->SgId = $param["SgId"];
        }

        if (array_key_exists("SgName",$param) and $param["SgName"] !== null) {
            $this->SgName = $param["SgName"];
        }

        if (array_key_exists("SgRemark",$param) and $param["SgRemark"] !== null) {
            $this->SgRemark = $param["SgRemark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
