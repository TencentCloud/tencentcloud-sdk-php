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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本流量信息
 *
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method boolean getIsDefaultPriority() 获取是否默认版本
 * @method void setIsDefaultPriority(boolean $IsDefaultPriority) 设置是否默认版本
 * @method integer getFlowRatio() 获取流量比例
 * @method void setFlowRatio(integer $FlowRatio) 设置流量比例
 * @method ObjectKV getUrlParam() 获取测试KV值
 * @method void setUrlParam(ObjectKV $UrlParam) 设置测试KV值
 * @method integer getPriority() 获取权重
 * @method void setPriority(integer $Priority) 设置权重
 */
class VersionFlowInfo extends AbstractModel
{
    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var boolean 是否默认版本
     */
    public $IsDefaultPriority;

    /**
     * @var integer 流量比例
     */
    public $FlowRatio;

    /**
     * @var ObjectKV 测试KV值
     */
    public $UrlParam;

    /**
     * @var integer 权重
     */
    public $Priority;

    /**
     * @param string $VersionName 版本名
     * @param boolean $IsDefaultPriority 是否默认版本
     * @param integer $FlowRatio 流量比例
     * @param ObjectKV $UrlParam 测试KV值
     * @param integer $Priority 权重
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("IsDefaultPriority",$param) and $param["IsDefaultPriority"] !== null) {
            $this->IsDefaultPriority = $param["IsDefaultPriority"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("UrlParam",$param) and $param["UrlParam"] !== null) {
            $this->UrlParam = new ObjectKV();
            $this->UrlParam->deserialize($param["UrlParam"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
