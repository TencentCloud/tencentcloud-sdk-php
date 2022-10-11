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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteMesh请求参数结构体
 *
 * @method string getMeshId() 获取需要删除的MeshId
 * @method void setMeshId(string $MeshId) 设置需要删除的MeshId
 * @method boolean getNeedDeleteCLS() 获取CLS组件是否被删除
 * @method void setNeedDeleteCLS(boolean $NeedDeleteCLS) 设置CLS组件是否被删除
 * @method boolean getNeedDeleteTMP() 获取TMP组件是否被删除
 * @method void setNeedDeleteTMP(boolean $NeedDeleteTMP) 设置TMP组件是否被删除
 * @method boolean getNeedDeleteAPM() 获取APM组件是否被删除
 * @method void setNeedDeleteAPM(boolean $NeedDeleteAPM) 设置APM组件是否被删除
 * @method boolean getNeedDeleteGrafana() 获取Grafana组件是否被删除
 * @method void setNeedDeleteGrafana(boolean $NeedDeleteGrafana) 设置Grafana组件是否被删除
 */
class DeleteMeshRequest extends AbstractModel
{
    /**
     * @var string 需要删除的MeshId
     */
    public $MeshId;

    /**
     * @var boolean CLS组件是否被删除
     */
    public $NeedDeleteCLS;

    /**
     * @var boolean TMP组件是否被删除
     */
    public $NeedDeleteTMP;

    /**
     * @var boolean APM组件是否被删除
     */
    public $NeedDeleteAPM;

    /**
     * @var boolean Grafana组件是否被删除
     */
    public $NeedDeleteGrafana;

    /**
     * @param string $MeshId 需要删除的MeshId
     * @param boolean $NeedDeleteCLS CLS组件是否被删除
     * @param boolean $NeedDeleteTMP TMP组件是否被删除
     * @param boolean $NeedDeleteAPM APM组件是否被删除
     * @param boolean $NeedDeleteGrafana Grafana组件是否被删除
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
        if (array_key_exists("MeshId",$param) and $param["MeshId"] !== null) {
            $this->MeshId = $param["MeshId"];
        }

        if (array_key_exists("NeedDeleteCLS",$param) and $param["NeedDeleteCLS"] !== null) {
            $this->NeedDeleteCLS = $param["NeedDeleteCLS"];
        }

        if (array_key_exists("NeedDeleteTMP",$param) and $param["NeedDeleteTMP"] !== null) {
            $this->NeedDeleteTMP = $param["NeedDeleteTMP"];
        }

        if (array_key_exists("NeedDeleteAPM",$param) and $param["NeedDeleteAPM"] !== null) {
            $this->NeedDeleteAPM = $param["NeedDeleteAPM"];
        }

        if (array_key_exists("NeedDeleteGrafana",$param) and $param["NeedDeleteGrafana"] !== null) {
            $this->NeedDeleteGrafana = $param["NeedDeleteGrafana"];
        }
    }
}
