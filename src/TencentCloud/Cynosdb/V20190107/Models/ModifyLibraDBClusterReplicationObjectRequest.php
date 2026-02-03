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
 * ModifyLibraDBClusterReplicationObject请求参数结构体
 *
 * @method string getClusterId() 获取分析集群ID
 * @method void setClusterId(string $ClusterId) 设置分析集群ID
 * @method string getInstanceId() 获取只读分析引擎实例 ID
 * @method void setInstanceId(string $InstanceId) 设置只读分析引擎实例 ID
 * @method string getForceDefaultMapRule() 获取映射模式
 * @method void setForceDefaultMapRule(string $ForceDefaultMapRule) 设置映射模式
 * @method array getObjects() 获取同步对象
 * @method void setObjects(array $Objects) 设置同步对象
 * @method array getAutoMapRules() 获取自动映射规则
 * @method void setAutoMapRules(array $AutoMapRules) 设置自动映射规则
 * @method boolean getRefreshMapping() 获取是否按照最新映射规则刷新存量映射关系
 * @method void setRefreshMapping(boolean $RefreshMapping) 设置是否按照最新映射规则刷新存量映射关系
 */
class ModifyLibraDBClusterReplicationObjectRequest extends AbstractModel
{
    /**
     * @var string 分析集群ID
     */
    public $ClusterId;

    /**
     * @var string 只读分析引擎实例 ID
     */
    public $InstanceId;

    /**
     * @var string 映射模式
     */
    public $ForceDefaultMapRule;

    /**
     * @var array 同步对象
     */
    public $Objects;

    /**
     * @var array 自动映射规则
     */
    public $AutoMapRules;

    /**
     * @var boolean 是否按照最新映射规则刷新存量映射关系
     */
    public $RefreshMapping;

    /**
     * @param string $ClusterId 分析集群ID
     * @param string $InstanceId 只读分析引擎实例 ID
     * @param string $ForceDefaultMapRule 映射模式
     * @param array $Objects 同步对象
     * @param array $AutoMapRules 自动映射规则
     * @param boolean $RefreshMapping 是否按照最新映射规则刷新存量映射关系
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ForceDefaultMapRule",$param) and $param["ForceDefaultMapRule"] !== null) {
            $this->ForceDefaultMapRule = $param["ForceDefaultMapRule"];
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = [];
            foreach ($param["Objects"] as $key => $value){
                $obj = new ReplicationObject();
                $obj->deserialize($value);
                array_push($this->Objects, $obj);
            }
        }

        if (array_key_exists("AutoMapRules",$param) and $param["AutoMapRules"] !== null) {
            $this->AutoMapRules = [];
            foreach ($param["AutoMapRules"] as $key => $value){
                $obj = new AutoMapRule();
                $obj->deserialize($value);
                array_push($this->AutoMapRules, $obj);
            }
        }

        if (array_key_exists("RefreshMapping",$param) and $param["RefreshMapping"] !== null) {
            $this->RefreshMapping = $param["RefreshMapping"];
        }
    }
}
