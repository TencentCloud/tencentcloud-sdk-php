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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeObjects请求参数结构体
 *
 * @method string getSubscribeId() 获取数据订阅实例的ID
 * @method void setSubscribeId(string $SubscribeId) 设置数据订阅实例的ID
 * @method integer getSubscribeObjectType() 获取数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) 设置数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合
 * @method array getObjects() 获取修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则改字段必填。
 * @method void setObjects(array $Objects) 设置修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则改字段必填。
 * @method array getDistributeRules() 获取kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。
 * @method void setDistributeRules(array $DistributeRules) 设置kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。
 * @method string getDefaultRuleType() 获取默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。
该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。
 * @method void setDefaultRuleType(string $DefaultRuleType) 设置默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。
该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。
 * @method array getPipelineInfo() 获取mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。
 * @method void setPipelineInfo(array $PipelineInfo) 设置mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。
 */
class ModifySubscribeObjectsRequest extends AbstractModel
{
    /**
     * @var string 数据订阅实例的ID
     */
    public $SubscribeId;

    /**
     * @var integer 数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合
     */
    public $SubscribeObjectType;

    /**
     * @var array 修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则改字段必填。
     */
    public $Objects;

    /**
     * @var array kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。
     */
    public $DistributeRules;

    /**
     * @var string 默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。
该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。
     */
    public $DefaultRuleType;

    /**
     * @var array mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。
     */
    public $PipelineInfo;

    /**
     * @param string $SubscribeId 数据订阅实例的ID
     * @param integer $SubscribeObjectType 数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合
     * @param array $Objects 修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则改字段必填。
     * @param array $DistributeRules kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。
     * @param string $DefaultRuleType 默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。
该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。
     * @param array $PipelineInfo mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeObjectType",$param) and $param["SubscribeObjectType"] !== null) {
            $this->SubscribeObjectType = $param["SubscribeObjectType"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = [];
            foreach ($param["Objects"] as $key => $value){
                $obj = new ModifiedSubscribeObject();
                $obj->deserialize($value);
                array_push($this->Objects, $obj);
            }
        }

        if (array_key_exists("DistributeRules",$param) and $param["DistributeRules"] !== null) {
            $this->DistributeRules = [];
            foreach ($param["DistributeRules"] as $key => $value){
                $obj = new DistributeRule();
                $obj->deserialize($value);
                array_push($this->DistributeRules, $obj);
            }
        }

        if (array_key_exists("DefaultRuleType",$param) and $param["DefaultRuleType"] !== null) {
            $this->DefaultRuleType = $param["DefaultRuleType"];
        }

        if (array_key_exists("PipelineInfo",$param) and $param["PipelineInfo"] !== null) {
            $this->PipelineInfo = [];
            foreach ($param["PipelineInfo"] as $key => $value){
                $obj = new PipelineInfo();
                $obj->deserialize($value);
                array_push($this->PipelineInfo, $obj);
            }
        }
    }
}
