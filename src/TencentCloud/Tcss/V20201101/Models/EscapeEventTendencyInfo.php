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
 * 待处理逃逸事件趋势
 *
 * @method integer getRiskContainerEventCount() 获取待处理风险容器事件总数
 * @method void setRiskContainerEventCount(integer $RiskContainerEventCount) 设置待处理风险容器事件总数
 * @method integer getProcessPrivilegeEventCount() 获取待处理程序特权事件总数
 * @method void setProcessPrivilegeEventCount(integer $ProcessPrivilegeEventCount) 设置待处理程序特权事件总数
 * @method integer getContainerEscapeEventCount() 获取待处理容器逃逸事件总数
 * @method void setContainerEscapeEventCount(integer $ContainerEscapeEventCount) 设置待处理容器逃逸事件总数
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 */
class EscapeEventTendencyInfo extends AbstractModel
{
    /**
     * @var integer 待处理风险容器事件总数
     */
    public $RiskContainerEventCount;

    /**
     * @var integer 待处理程序特权事件总数
     */
    public $ProcessPrivilegeEventCount;

    /**
     * @var integer 待处理容器逃逸事件总数
     */
    public $ContainerEscapeEventCount;

    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @param integer $RiskContainerEventCount 待处理风险容器事件总数
     * @param integer $ProcessPrivilegeEventCount 待处理程序特权事件总数
     * @param integer $ContainerEscapeEventCount 待处理容器逃逸事件总数
     * @param string $Date 日期
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
        if (array_key_exists("RiskContainerEventCount",$param) and $param["RiskContainerEventCount"] !== null) {
            $this->RiskContainerEventCount = $param["RiskContainerEventCount"];
        }

        if (array_key_exists("ProcessPrivilegeEventCount",$param) and $param["ProcessPrivilegeEventCount"] !== null) {
            $this->ProcessPrivilegeEventCount = $param["ProcessPrivilegeEventCount"];
        }

        if (array_key_exists("ContainerEscapeEventCount",$param) and $param["ContainerEscapeEventCount"] !== null) {
            $this->ContainerEscapeEventCount = $param["ContainerEscapeEventCount"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
