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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAComplianceGroups请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getComplianceGroupId() 获取合规组ID
 * @method void setComplianceGroupId(integer $ComplianceGroupId) 设置合规组ID
 * @method string getName() 获取合规组名称
 * @method void setName(string $Name) 设置合规组名称
 * @method integer getOffset() 获取偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0
 * @method integer getLimit() 获取返回结果集数量，默认值是10000，最大值为10000，根据该资源的个数限制条件，该资源的个数不会超过10000，所以如果不输入该字段，默认获取全量数据
 * @method void setLimit(integer $Limit) 设置返回结果集数量，默认值是10000，最大值为10000，根据该资源的个数限制条件，该资源的个数不会超过10000，所以如果不输入该字段，默认获取全量数据
 * @method array getComplianceGroupTypeList() 获取合规组类型可选值：0 默认合规组, 1 系统合规组, 2 自定义合规组
 * @method void setComplianceGroupTypeList(array $ComplianceGroupTypeList) 设置合规组类型可选值：0 默认合规组, 1 系统合规组, 2 自定义合规组
 */
class DescribeDSPAComplianceGroupsRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceGroupId;

    /**
     * @var string 合规组名称
     */
    public $Name;

    /**
     * @var integer 偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var integer 返回结果集数量，默认值是10000，最大值为10000，根据该资源的个数限制条件，该资源的个数不会超过10000，所以如果不输入该字段，默认获取全量数据
     */
    public $Limit;

    /**
     * @var array 合规组类型可选值：0 默认合规组, 1 系统合规组, 2 自定义合规组
     */
    public $ComplianceGroupTypeList;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $ComplianceGroupId 合规组ID
     * @param string $Name 合规组名称
     * @param integer $Offset 偏移量，默认值为0
     * @param integer $Limit 返回结果集数量，默认值是10000，最大值为10000，根据该资源的个数限制条件，该资源的个数不会超过10000，所以如果不输入该字段，默认获取全量数据
     * @param array $ComplianceGroupTypeList 合规组类型可选值：0 默认合规组, 1 系统合规组, 2 自定义合规组
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ComplianceGroupId",$param) and $param["ComplianceGroupId"] !== null) {
            $this->ComplianceGroupId = $param["ComplianceGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ComplianceGroupTypeList",$param) and $param["ComplianceGroupTypeList"] !== null) {
            $this->ComplianceGroupTypeList = $param["ComplianceGroupTypeList"];
        }
    }
}
