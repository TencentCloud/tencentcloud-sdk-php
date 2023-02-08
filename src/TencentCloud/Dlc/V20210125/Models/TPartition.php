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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表分区字段信息
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getType() 获取字段类型
 * @method void setType(string $Type) 设置字段类型
 * @method string getComment() 获取字段描述
 * @method void setComment(string $Comment) 设置字段描述
 * @method string getPartitionType() 获取分区类型
 * @method void setPartitionType(string $PartitionType) 设置分区类型
 * @method string getPartitionFormat() 获取分区格式
 * @method void setPartitionFormat(string $PartitionFormat) 设置分区格式
 * @method integer getPartitionDot() 获取分区分隔数
 * @method void setPartitionDot(integer $PartitionDot) 设置分区分隔数
 * @method string getTransform() 获取分区转换策略
 * @method void setTransform(string $Transform) 设置分区转换策略
 * @method array getTransformArgs() 获取策略参数
 * @method void setTransformArgs(array $TransformArgs) 设置策略参数
 */
class TPartition extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段类型
     */
    public $Type;

    /**
     * @var string 字段描述
     */
    public $Comment;

    /**
     * @var string 分区类型
     */
    public $PartitionType;

    /**
     * @var string 分区格式
     */
    public $PartitionFormat;

    /**
     * @var integer 分区分隔数
     */
    public $PartitionDot;

    /**
     * @var string 分区转换策略
     */
    public $Transform;

    /**
     * @var array 策略参数
     */
    public $TransformArgs;

    /**
     * @param string $Name 字段名称
     * @param string $Type 字段类型
     * @param string $Comment 字段描述
     * @param string $PartitionType 分区类型
     * @param string $PartitionFormat 分区格式
     * @param integer $PartitionDot 分区分隔数
     * @param string $Transform 分区转换策略
     * @param array $TransformArgs 策略参数
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("PartitionFormat",$param) and $param["PartitionFormat"] !== null) {
            $this->PartitionFormat = $param["PartitionFormat"];
        }

        if (array_key_exists("PartitionDot",$param) and $param["PartitionDot"] !== null) {
            $this->PartitionDot = $param["PartitionDot"];
        }

        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = $param["Transform"];
        }

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }
    }
}
