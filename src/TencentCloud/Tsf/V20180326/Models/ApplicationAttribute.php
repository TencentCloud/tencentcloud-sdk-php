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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用列表其它字段
 *
 * @method integer getInstanceCount() 获取<p>总实例个数</p>
 * @method void setInstanceCount(integer $InstanceCount) 设置<p>总实例个数</p>
 * @method integer getRunInstanceCount() 获取<p>运行实例个数</p>
 * @method void setRunInstanceCount(integer $RunInstanceCount) 设置<p>运行实例个数</p>
 * @method integer getGroupCount() 获取<p>应用下部署组个数</p>
 * @method void setGroupCount(integer $GroupCount) 设置<p>应用下部署组个数</p>
 * @method string getRunningGroupCount() 获取<p>运行中部署组个数</p>
 * @method void setRunningGroupCount(string $RunningGroupCount) 设置<p>运行中部署组个数</p>
 * @method string getAbnormalCount() 获取<p>异常部署组个数</p>
 * @method void setAbnormalCount(string $AbnormalCount) 设置<p>异常部署组个数</p>
 * @method integer getImageTagCount() 获取<p>镜像tag数量</p>
 * @method void setImageTagCount(integer $ImageTagCount) 设置<p>镜像tag数量</p>
 */
class ApplicationAttribute extends AbstractModel
{
    /**
     * @var integer <p>总实例个数</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>运行实例个数</p>
     */
    public $RunInstanceCount;

    /**
     * @var integer <p>应用下部署组个数</p>
     */
    public $GroupCount;

    /**
     * @var string <p>运行中部署组个数</p>
     */
    public $RunningGroupCount;

    /**
     * @var string <p>异常部署组个数</p>
     */
    public $AbnormalCount;

    /**
     * @var integer <p>镜像tag数量</p>
     */
    public $ImageTagCount;

    /**
     * @param integer $InstanceCount <p>总实例个数</p>
     * @param integer $RunInstanceCount <p>运行实例个数</p>
     * @param integer $GroupCount <p>应用下部署组个数</p>
     * @param string $RunningGroupCount <p>运行中部署组个数</p>
     * @param string $AbnormalCount <p>异常部署组个数</p>
     * @param integer $ImageTagCount <p>镜像tag数量</p>
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
        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("RunInstanceCount",$param) and $param["RunInstanceCount"] !== null) {
            $this->RunInstanceCount = $param["RunInstanceCount"];
        }

        if (array_key_exists("GroupCount",$param) and $param["GroupCount"] !== null) {
            $this->GroupCount = $param["GroupCount"];
        }

        if (array_key_exists("RunningGroupCount",$param) and $param["RunningGroupCount"] !== null) {
            $this->RunningGroupCount = $param["RunningGroupCount"];
        }

        if (array_key_exists("AbnormalCount",$param) and $param["AbnormalCount"] !== null) {
            $this->AbnormalCount = $param["AbnormalCount"];
        }

        if (array_key_exists("ImageTagCount",$param) and $param["ImageTagCount"] !== null) {
            $this->ImageTagCount = $param["ImageTagCount"];
        }
    }
}
