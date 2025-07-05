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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceParamTplDetail返回参数结构体
 *
 * @method array getInstanceEnumParams() 获取枚举类参数详情列表。
 * @method void setInstanceEnumParams(array $InstanceEnumParams) 设置枚举类参数详情列表。
 * @method array getInstanceIntegerParams() 获取整形参数详情列表。
 * @method void setInstanceIntegerParams(array $InstanceIntegerParams) 设置整形参数详情列表。
 * @method array getInstanceTextParams() 获取文本参数详情列表。
 * @method void setInstanceTextParams(array $InstanceTextParams) 设置文本参数详情列表。
 * @method array getInstanceMultiParams() 获取多值参数详情列表。
 * @method void setInstanceMultiParams(array $InstanceMultiParams) 设置多值参数详情列表。
 * @method integer getTotalCount() 获取参数总个数。
 * @method void setTotalCount(integer $TotalCount) 设置参数总个数。
 * @method string getMongoVersion() 获取模板适配实例版本。
 * @method void setMongoVersion(string $MongoVersion) 设置模板适配实例版本。
 * @method string getClusterType() 获取模板适配集群类型，副本集或分片。。
 * @method void setClusterType(string $ClusterType) 设置模板适配集群类型，副本集或分片。。
 * @method string getTplName() 获取参数模板名称。
 * @method void setTplName(string $TplName) 设置参数模板名称。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBInstanceParamTplDetailResponse extends AbstractModel
{
    /**
     * @var array 枚举类参数详情列表。
     */
    public $InstanceEnumParams;

    /**
     * @var array 整形参数详情列表。
     */
    public $InstanceIntegerParams;

    /**
     * @var array 文本参数详情列表。
     */
    public $InstanceTextParams;

    /**
     * @var array 多值参数详情列表。
     */
    public $InstanceMultiParams;

    /**
     * @var integer 参数总个数。
     */
    public $TotalCount;

    /**
     * @var string 模板适配实例版本。
     */
    public $MongoVersion;

    /**
     * @var string 模板适配集群类型，副本集或分片。。
     */
    public $ClusterType;

    /**
     * @var string 参数模板名称。
     */
    public $TplName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InstanceEnumParams 枚举类参数详情列表。
     * @param array $InstanceIntegerParams 整形参数详情列表。
     * @param array $InstanceTextParams 文本参数详情列表。
     * @param array $InstanceMultiParams 多值参数详情列表。
     * @param integer $TotalCount 参数总个数。
     * @param string $MongoVersion 模板适配实例版本。
     * @param string $ClusterType 模板适配集群类型，副本集或分片。。
     * @param string $TplName 参数模板名称。
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
        if (array_key_exists("InstanceEnumParams",$param) and $param["InstanceEnumParams"] !== null) {
            $this->InstanceEnumParams = [];
            foreach ($param["InstanceEnumParams"] as $key => $value){
                $obj = new InstanceEnumParam();
                $obj->deserialize($value);
                array_push($this->InstanceEnumParams, $obj);
            }
        }

        if (array_key_exists("InstanceIntegerParams",$param) and $param["InstanceIntegerParams"] !== null) {
            $this->InstanceIntegerParams = [];
            foreach ($param["InstanceIntegerParams"] as $key => $value){
                $obj = new InstanceIntegerParam();
                $obj->deserialize($value);
                array_push($this->InstanceIntegerParams, $obj);
            }
        }

        if (array_key_exists("InstanceTextParams",$param) and $param["InstanceTextParams"] !== null) {
            $this->InstanceTextParams = [];
            foreach ($param["InstanceTextParams"] as $key => $value){
                $obj = new InstanceTextParam();
                $obj->deserialize($value);
                array_push($this->InstanceTextParams, $obj);
            }
        }

        if (array_key_exists("InstanceMultiParams",$param) and $param["InstanceMultiParams"] !== null) {
            $this->InstanceMultiParams = [];
            foreach ($param["InstanceMultiParams"] as $key => $value){
                $obj = new InstanceMultiParam();
                $obj->deserialize($value);
                array_push($this->InstanceMultiParams, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("TplName",$param) and $param["TplName"] !== null) {
            $this->TplName = $param["TplName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
