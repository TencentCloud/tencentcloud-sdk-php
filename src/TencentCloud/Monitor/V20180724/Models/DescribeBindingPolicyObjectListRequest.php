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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindingPolicyObjectList请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method integer getGroupId() 获取<p>策略组id，如果有形如 policy-xxxx 的 id，请填到 PolicyId 字段中，本字段填 0</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id，如果有形如 policy-xxxx 的 id，请填到 PolicyId 字段中，本字段填 0</p>
 * @method string getPolicyId() 获取<p>告警策略id，形如 policy-xxxx，如果填入，则GroupId可以填0</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略id，形如 policy-xxxx，如果填入，则GroupId可以填0</p>
 * @method integer getLimit() 获取<p>每次返回的数量，取值1~100，默认20</p>
 * @method void setLimit(integer $Limit) 设置<p>每次返回的数量，取值1~100，默认20</p>
 * @method integer getOffset() 获取<p>偏移量，从0开始计数，默认0。举例来说，参数 Offset=0&amp;Limit=20 返回第 0 到 19 项，Offset=20&amp;Limit=20 返回第 20 到 39 项，以此类推</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，从0开始计数，默认0。举例来说，参数 Offset=0&amp;Limit=20 返回第 0 到 19 项，Offset=20&amp;Limit=20 返回第 20 到 39 项，以此类推</p>
 * @method array getDimensions() 获取<p>筛选对象的维度信息</p>
 * @method void setDimensions(array $Dimensions) 设置<p>筛选对象的维度信息</p>
 */
class DescribeBindingPolicyObjectListRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>策略组id，如果有形如 policy-xxxx 的 id，请填到 PolicyId 字段中，本字段填 0</p>
     */
    public $GroupId;

    /**
     * @var string <p>告警策略id，形如 policy-xxxx，如果填入，则GroupId可以填0</p>
     */
    public $PolicyId;

    /**
     * @var integer <p>每次返回的数量，取值1~100，默认20</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，从0开始计数，默认0。举例来说，参数 Offset=0&amp;Limit=20 返回第 0 到 19 项，Offset=20&amp;Limit=20 返回第 20 到 39 项，以此类推</p>
     */
    public $Offset;

    /**
     * @var array <p>筛选对象的维度信息</p>
     */
    public $Dimensions;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param integer $GroupId <p>策略组id，如果有形如 policy-xxxx 的 id，请填到 PolicyId 字段中，本字段填 0</p>
     * @param string $PolicyId <p>告警策略id，形如 policy-xxxx，如果填入，则GroupId可以填0</p>
     * @param integer $Limit <p>每次返回的数量，取值1~100，默认20</p>
     * @param integer $Offset <p>偏移量，从0开始计数，默认0。举例来说，参数 Offset=0&amp;Limit=20 返回第 0 到 19 项，Offset=20&amp;Limit=20 返回第 20 到 39 项，以此类推</p>
     * @param array $Dimensions <p>筛选对象的维度信息</p>
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new DescribeBindingPolicyObjectListDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }
    }
}
