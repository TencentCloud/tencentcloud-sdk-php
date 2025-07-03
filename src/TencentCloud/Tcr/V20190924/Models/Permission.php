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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略
 *
 * @method string getResource() 获取资源路径，目前仅支持Namespace
 * @method void setResource(string $Resource) 设置资源路径，目前仅支持Namespace
 * @method array getActions() 获取动作，目前仅支持：tcr:PushRepository、tcr:PullRepository、tcr:CreateRepository、tcr:CreateHelmChart、tcr:DescribeHelmCharts
 * @method void setActions(array $Actions) 设置动作，目前仅支持：tcr:PushRepository、tcr:PullRepository、tcr:CreateRepository、tcr:CreateHelmChart、tcr:DescribeHelmCharts
 */
class Permission extends AbstractModel
{
    /**
     * @var string 资源路径，目前仅支持Namespace
     */
    public $Resource;

    /**
     * @var array 动作，目前仅支持：tcr:PushRepository、tcr:PullRepository、tcr:CreateRepository、tcr:CreateHelmChart、tcr:DescribeHelmCharts
     */
    public $Actions;

    /**
     * @param string $Resource 资源路径，目前仅支持Namespace
     * @param array $Actions 动作，目前仅支持：tcr:PushRepository、tcr:PullRepository、tcr:CreateRepository、tcr:CreateHelmChart、tcr:DescribeHelmCharts
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }
    }
}
