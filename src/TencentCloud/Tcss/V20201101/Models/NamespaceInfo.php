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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的命名空间列表信息
 *
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method integer getRegistryCnt() 获取包含仓库数
 * @method void setRegistryCnt(integer $RegistryCnt) 设置包含仓库数
 * @method integer getImageCnt() 获取包含镜像数
 * @method void setImageCnt(integer $ImageCnt) 设置包含镜像数
 * @method integer getRiskImageCnt() 获取包含风险镜像数
 * @method void setRiskImageCnt(integer $RiskImageCnt) 设置包含风险镜像数
 */
class NamespaceInfo extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var integer 包含仓库数
     */
    public $RegistryCnt;

    /**
     * @var integer 包含镜像数
     */
    public $ImageCnt;

    /**
     * @var integer 包含风险镜像数
     */
    public $RiskImageCnt;

    /**
     * @param string $Namespace 命名空间名称
     * @param integer $RegistryCnt 包含仓库数
     * @param integer $ImageCnt 包含镜像数
     * @param integer $RiskImageCnt 包含风险镜像数
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("RegistryCnt",$param) and $param["RegistryCnt"] !== null) {
            $this->RegistryCnt = $param["RegistryCnt"];
        }

        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("RiskImageCnt",$param) and $param["RiskImageCnt"] !== null) {
            $this->RiskImageCnt = $param["RiskImageCnt"];
        }
    }
}
