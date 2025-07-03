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
 * 安全组规则详情
 *
 * @method array getInBound() 获取入站规则
 * @method void setInBound(array $InBound) 设置入站规则
 * @method array getOutBound() 获取出站规则
 * @method void setOutBound(array $OutBound) 设置出站规则
 * @method string getSgId() 获取安全组Id
 * @method void setSgId(string $SgId) 设置安全组Id
 * @method string getSgName() 获取安全组名称
 * @method void setSgName(string $SgName) 设置安全组名称
 * @method string getSgRemark() 获取备注
 * @method void setSgRemark(string $SgRemark) 设置备注
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getVersion() 获取版本
 * @method void setVersion(integer $Version) 设置版本
 */
class UsgRuleDetail extends AbstractModel
{
    /**
     * @var array 入站规则
     */
    public $InBound;

    /**
     * @var array 出站规则
     */
    public $OutBound;

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
     * @var integer 版本
     */
    public $Version;

    /**
     * @param array $InBound 入站规则
     * @param array $OutBound 出站规则
     * @param string $SgId 安全组Id
     * @param string $SgName 安全组名称
     * @param string $SgRemark 备注
     * @param string $CreateTime 创建时间
     * @param integer $Version 版本
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
        if (array_key_exists("InBound",$param) and $param["InBound"] !== null) {
            $this->InBound = [];
            foreach ($param["InBound"] as $key => $value){
                $obj = new UsgPolicy();
                $obj->deserialize($value);
                array_push($this->InBound, $obj);
            }
        }

        if (array_key_exists("OutBound",$param) and $param["OutBound"] !== null) {
            $this->OutBound = [];
            foreach ($param["OutBound"] as $key => $value){
                $obj = new UsgPolicy();
                $obj->deserialize($value);
                array_push($this->OutBound, $obj);
            }
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
