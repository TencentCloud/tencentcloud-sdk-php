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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEdgeCVMInstances请求参数结构体
 *
 * @method string getClusterID() 获取集群id
 * @method void setClusterID(string $ClusterID) 设置集群id
 * @method string getRunInstancePara() 获取CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
 * @method void setRunInstancePara(string $RunInstancePara) 设置CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
 * @method string getCvmRegion() 获取CVM所属Region
 * @method void setCvmRegion(string $CvmRegion) 设置CVM所属Region
 * @method integer getCvmCount() 获取CVM数量
 * @method void setCvmCount(integer $CvmCount) 设置CVM数量
 * @method string getExternal() 获取实例扩展信息
 * @method void setExternal(string $External) 设置实例扩展信息
 * @method string getUserScript() 获取用户自定义脚本
 * @method void setUserScript(string $UserScript) 设置用户自定义脚本
 * @method boolean getEnableEni() 获取是否开启弹性网卡功能
 * @method void setEnableEni(boolean $EnableEni) 设置是否开启弹性网卡功能
 */
class CreateEdgeCVMInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群id
     */
    public $ClusterID;

    /**
     * @var string CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
     */
    public $RunInstancePara;

    /**
     * @var string CVM所属Region
     */
    public $CvmRegion;

    /**
     * @var integer CVM数量
     */
    public $CvmCount;

    /**
     * @var string 实例扩展信息
     */
    public $External;

    /**
     * @var string 用户自定义脚本
     */
    public $UserScript;

    /**
     * @var boolean 是否开启弹性网卡功能
     */
    public $EnableEni;

    /**
     * @param string $ClusterID 集群id
     * @param string $RunInstancePara CVM创建透传参数，json化字符串格式，如需要保证扩展集群节点请求幂等性需要在此参数添加ClientToken字段，详见[CVM创建实例](https://cloud.tencent.com/document/product/213/15730)接口。
     * @param string $CvmRegion CVM所属Region
     * @param integer $CvmCount CVM数量
     * @param string $External 实例扩展信息
     * @param string $UserScript 用户自定义脚本
     * @param boolean $EnableEni 是否开启弹性网卡功能
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("RunInstancePara",$param) and $param["RunInstancePara"] !== null) {
            $this->RunInstancePara = $param["RunInstancePara"];
        }

        if (array_key_exists("CvmRegion",$param) and $param["CvmRegion"] !== null) {
            $this->CvmRegion = $param["CvmRegion"];
        }

        if (array_key_exists("CvmCount",$param) and $param["CvmCount"] !== null) {
            $this->CvmCount = $param["CvmCount"];
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = $param["External"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }

        if (array_key_exists("EnableEni",$param) and $param["EnableEni"] !== null) {
            $this->EnableEni = $param["EnableEni"];
        }
    }
}
