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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务依赖的边信息
 *
 * @method string getTaskTo() 获取下游任务id
 * @method void setTaskTo(string $TaskTo) 设置下游任务id
 * @method string getTaskFrom() 获取上游任务id
 * @method void setTaskFrom(string $TaskFrom) 设置上游任务id
 * @method string getLinkType() 获取依赖边类型 1、“real_real”表示任务->任务；2、"virtual_real" 跨工作流任务->任务
 * @method void setLinkType(string $LinkType) 设置依赖边类型 1、“real_real”表示任务->任务；2、"virtual_real" 跨工作流任务->任务
 * @method string getLinkId() 获取依赖边id
 * @method void setLinkId(string $LinkId) 设置依赖边id
 * @method string getLinkStyle() 获取为了区分新增的循环依赖新增的类型。默认是normal，循环依赖则是circulate
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkStyle(string $LinkStyle) 设置为了区分新增的循环依赖新增的类型。默认是normal，循环依赖则是circulate
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpsTaskLinkInfoDto extends AbstractModel
{
    /**
     * @var string 下游任务id
     */
    public $TaskTo;

    /**
     * @var string 上游任务id
     */
    public $TaskFrom;

    /**
     * @var string 依赖边类型 1、“real_real”表示任务->任务；2、"virtual_real" 跨工作流任务->任务
     */
    public $LinkType;

    /**
     * @var string 依赖边id
     */
    public $LinkId;

    /**
     * @var string 为了区分新增的循环依赖新增的类型。默认是normal，循环依赖则是circulate
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkStyle;

    /**
     * @param string $TaskTo 下游任务id
     * @param string $TaskFrom 上游任务id
     * @param string $LinkType 依赖边类型 1、“real_real”表示任务->任务；2、"virtual_real" 跨工作流任务->任务
     * @param string $LinkId 依赖边id
     * @param string $LinkStyle 为了区分新增的循环依赖新增的类型。默认是normal，循环依赖则是circulate
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("LinkType",$param) and $param["LinkType"] !== null) {
            $this->LinkType = $param["LinkType"];
        }

        if (array_key_exists("LinkId",$param) and $param["LinkId"] !== null) {
            $this->LinkId = $param["LinkId"];
        }

        if (array_key_exists("LinkStyle",$param) and $param["LinkStyle"] !== null) {
            $this->LinkStyle = $param["LinkStyle"];
        }
    }
}
