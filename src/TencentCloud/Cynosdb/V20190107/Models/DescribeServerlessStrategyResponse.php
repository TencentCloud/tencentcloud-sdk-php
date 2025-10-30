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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerlessStrategy返回参数结构体
 *
 * @method integer getAutoPauseDelay() 获取cpu负载为 0 时持续多久（秒）发起自动暂停
 * @method void setAutoPauseDelay(integer $AutoPauseDelay) 设置cpu负载为 0 时持续多久（秒）发起自动暂停
 * @method integer getAutoScaleUpDelay() 获取cpu负载超过当前规格核数时，持续多久（秒）发起自动扩容
 * @method void setAutoScaleUpDelay(integer $AutoScaleUpDelay) 设置cpu负载超过当前规格核数时，持续多久（秒）发起自动扩容
 * @method integer getAutoScaleDownDelay() 获取cpu 负载低于低一级规格核数时，持续多久（秒）发起自动缩容
 * @method void setAutoScaleDownDelay(integer $AutoScaleDownDelay) 设置cpu 负载低于低一级规格核数时，持续多久（秒）发起自动缩容
 * @method string getAutoPause() 获取是否自动暂停，可能值：
yes
no
 * @method void setAutoPause(string $AutoPause) 设置是否自动暂停，可能值：
yes
no
 * @method string getAutoScaleUp() 获取集群是否允许向上扩容，可选范围<li>yes</li><li>no</li>
 * @method void setAutoScaleUp(string $AutoScaleUp) 设置集群是否允许向上扩容，可选范围<li>yes</li><li>no</li>
 * @method string getAutoScaleDown() 获取集群是否允许向下缩容，可选范围<li>yes</li><li>no</li>
 * @method void setAutoScaleDown(string $AutoScaleDown) 设置集群是否允许向下缩容，可选范围<li>yes</li><li>no</li>
 * @method string getAutoArchive() 获取是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method void setAutoArchive(string $AutoArchive) 设置是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServerlessStrategyResponse extends AbstractModel
{
    /**
     * @var integer cpu负载为 0 时持续多久（秒）发起自动暂停
     */
    public $AutoPauseDelay;

    /**
     * @var integer cpu负载超过当前规格核数时，持续多久（秒）发起自动扩容
     */
    public $AutoScaleUpDelay;

    /**
     * @var integer cpu 负载低于低一级规格核数时，持续多久（秒）发起自动缩容
     */
    public $AutoScaleDownDelay;

    /**
     * @var string 是否自动暂停，可能值：
yes
no
     */
    public $AutoPause;

    /**
     * @var string 集群是否允许向上扩容，可选范围<li>yes</li><li>no</li>
     */
    public $AutoScaleUp;

    /**
     * @var string 集群是否允许向下缩容，可选范围<li>yes</li><li>no</li>
     */
    public $AutoScaleDown;

    /**
     * @var string 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     */
    public $AutoArchive;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AutoPauseDelay cpu负载为 0 时持续多久（秒）发起自动暂停
     * @param integer $AutoScaleUpDelay cpu负载超过当前规格核数时，持续多久（秒）发起自动扩容
     * @param integer $AutoScaleDownDelay cpu 负载低于低一级规格核数时，持续多久（秒）发起自动缩容
     * @param string $AutoPause 是否自动暂停，可能值：
yes
no
     * @param string $AutoScaleUp 集群是否允许向上扩容，可选范围<li>yes</li><li>no</li>
     * @param string $AutoScaleDown 集群是否允许向下缩容，可选范围<li>yes</li><li>no</li>
     * @param string $AutoArchive 是否开启归档，可选范围<li>yes</li><li>no</li>默认值:yes
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AutoPauseDelay",$param) and $param["AutoPauseDelay"] !== null) {
            $this->AutoPauseDelay = $param["AutoPauseDelay"];
        }

        if (array_key_exists("AutoScaleUpDelay",$param) and $param["AutoScaleUpDelay"] !== null) {
            $this->AutoScaleUpDelay = $param["AutoScaleUpDelay"];
        }

        if (array_key_exists("AutoScaleDownDelay",$param) and $param["AutoScaleDownDelay"] !== null) {
            $this->AutoScaleDownDelay = $param["AutoScaleDownDelay"];
        }

        if (array_key_exists("AutoPause",$param) and $param["AutoPause"] !== null) {
            $this->AutoPause = $param["AutoPause"];
        }

        if (array_key_exists("AutoScaleUp",$param) and $param["AutoScaleUp"] !== null) {
            $this->AutoScaleUp = $param["AutoScaleUp"];
        }

        if (array_key_exists("AutoScaleDown",$param) and $param["AutoScaleDown"] !== null) {
            $this->AutoScaleDown = $param["AutoScaleDown"];
        }

        if (array_key_exists("AutoArchive",$param) and $param["AutoArchive"] !== null) {
            $this->AutoArchive = $param["AutoArchive"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
