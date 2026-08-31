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
 * @method string getSubscribeId() 获取<p>数据订阅实例的ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>数据订阅实例的ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
 * @method integer getSubscribeObjectType() 获取<p>数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合</p>
 * @method void setSubscribeObjectType(integer $SubscribeObjectType) 设置<p>数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合</p>
 * @method array getObjects() 获取<p>修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则该字段必填。</p>
 * @method void setObjects(array $Objects) 设置<p>修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则该字段必填。</p>
 * @method array getDistributeRules() 获取<p>kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。</p>
 * @method void setDistributeRules(array $DistributeRules) 设置<p>kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。</p>
 * @method string getDefaultRuleType() 获取<p>默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。<br>非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。<br>该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。</p>
 * @method void setDefaultRuleType(string $DefaultRuleType) 设置<p>默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。<br>非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。<br>该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。</p>
 * @method array getPipelineInfo() 获取<p>mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。</p>
 * @method void setPipelineInfo(array $PipelineInfo) 设置<p>mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。</p>
 */
class ModifySubscribeObjectsRequest extends AbstractModel
{
    /**
     * @var string <p>数据订阅实例的ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     */
    public $SubscribeId;

    /**
     * @var integer <p>数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合</p>
     */
    public $SubscribeObjectType;

    /**
     * @var array <p>修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则该字段必填。</p>
     */
    public $Objects;

    /**
     * @var array <p>kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。</p>
     */
    public $DistributeRules;

    /**
     * @var string <p>默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。<br>非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。<br>该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。</p>
     */
    public $DefaultRuleType;

    /**
     * @var array <p>mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。</p>
     */
    public $PipelineInfo;

    /**
     * @param string $SubscribeId <p>数据订阅实例的ID，可通过<a href="https://cloud.tencent.com/document/product/571/102943">DescribeSubscribeJobs</a>接口获取。</p>
     * @param integer $SubscribeObjectType <p>数据订阅的类型，非mongo任务的枚举值：0-全实例更新；1-数据更新；2-结构更新；3-数据更新+结构更新。mongo任务的枚举值：0-全实例更新；4-订阅单库；5-订阅单集合</p>
     * @param array $Objects <p>修改后的订阅数据库表信息。会覆盖原来的订阅对象，所以除非 SubscribeObjectType = 0或2，否则该字段必填。</p>
     * @param array $DistributeRules <p>kafka分区策略。如果不填，默认不修改。如果填了，会覆盖原来的策略。</p>
     * @param string $DefaultRuleType <p>默认分区策略。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。<br>非mongo产品支持的默认策略: table-按表名分区，pk-按表名+主键分区。mongo的默认策略仅支持：collection-按集合名分区。<br>该字段与DistributeRules搭配使用。如果配置了DistributeRules，该字段也必填。如果配置了该字段，视为配置了一条DistributeRules，原来的分区策略也会被覆盖。</p>
     * @param array $PipelineInfo <p>mongo输出聚合设置，mongo任务可选。如果不填，默认不修改。</p>
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
