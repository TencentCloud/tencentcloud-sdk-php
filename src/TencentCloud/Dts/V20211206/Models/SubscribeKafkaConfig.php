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
 * 订阅的kafka分区数和分区规则。mariadb，percona，tdsqlmysql，tdpg不支持自定义分区，所以DistributeRules和DefaultRuleType可以不填，但是NumberOfPartitions是必填。
 *
 * @method integer getNumberOfPartitions() 获取kafka分区数量，枚举值为1，4，8
 * @method void setNumberOfPartitions(integer $NumberOfPartitions) 设置kafka分区数量，枚举值为1，4，8
 * @method array getDistributeRules() 获取分区规则。当NumberOfPartitions > 1时，该项必填。
 * @method void setDistributeRules(array $DistributeRules) 设置分区规则。当NumberOfPartitions > 1时，该项必填。
 * @method string getDefaultRuleType() 获取默认分区策略。当NumberOfPartitions > 1时，该项必填。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区。mongo的枚举值为：collection-按集合名分区。
该字段与DistributeRules搭配使用，如果配置了该字段，视为配置了一条DistributeRules。
 * @method void setDefaultRuleType(string $DefaultRuleType) 设置默认分区策略。当NumberOfPartitions > 1时，该项必填。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区。mongo的枚举值为：collection-按集合名分区。
该字段与DistributeRules搭配使用，如果配置了该字段，视为配置了一条DistributeRules。
 */
class SubscribeKafkaConfig extends AbstractModel
{
    /**
     * @var integer kafka分区数量，枚举值为1，4，8
     */
    public $NumberOfPartitions;

    /**
     * @var array 分区规则。当NumberOfPartitions > 1时，该项必填。
     */
    public $DistributeRules;

    /**
     * @var string 默认分区策略。当NumberOfPartitions > 1时，该项必填。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区。mongo的枚举值为：collection-按集合名分区。
该字段与DistributeRules搭配使用，如果配置了该字段，视为配置了一条DistributeRules。
     */
    public $DefaultRuleType;

    /**
     * @param integer $NumberOfPartitions kafka分区数量，枚举值为1，4，8
     * @param array $DistributeRules 分区规则。当NumberOfPartitions > 1时，该项必填。
     * @param string $DefaultRuleType 默认分区策略。当NumberOfPartitions > 1时，该项必填。不满足DistributeRules中正则表达式的数据，将按照默认分区策略计算分区。
非mongo产品的枚举值为: table-按表名分区，pk-按表名+主键分区。mongo的枚举值为：collection-按集合名分区。
该字段与DistributeRules搭配使用，如果配置了该字段，视为配置了一条DistributeRules。
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
        if (array_key_exists("NumberOfPartitions",$param) and $param["NumberOfPartitions"] !== null) {
            $this->NumberOfPartitions = $param["NumberOfPartitions"];
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
    }
}
