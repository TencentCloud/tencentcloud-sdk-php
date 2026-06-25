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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关 mcp server 下所有 tool 的 ACL 状态
 *
 * @method string getACLType() 获取<p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method void setACLType(string $ACLType) 设置<p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
 * @method array getDataList() 获取<p>数据列表</p>
 * @method void setDataList(array $DataList) 设置<p>数据列表</p>
 * @method integer getTotalCount() 获取<p>计数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>计数</p>
 */
class AIGWMCPToolACLListResult extends AbstractModel
{
    /**
     * @var string <p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     */
    public $ACLType;

    /**
     * @var array <p>数据列表</p>
     */
    public $DataList;

    /**
     * @var integer <p>计数</p>
     */
    public $TotalCount;

    /**
     * @param string $ACLType <p>黑白名单鉴权类型</p><p>枚举值：</p><ul><li>None： 不鉴权</li><li>Allow： 白名单</li><li>Deny： 黑名单</li></ul>
     * @param array $DataList <p>数据列表</p>
     * @param integer $TotalCount <p>计数</p>
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
        if (array_key_exists("ACLType",$param) and $param["ACLType"] !== null) {
            $this->ACLType = $param["ACLType"];
        }

        if (array_key_exists("DataList",$param) and $param["DataList"] !== null) {
            $this->DataList = [];
            foreach ($param["DataList"] as $key => $value){
                $obj = new AIGWMCPToolACLItem();
                $obj->deserialize($value);
                array_push($this->DataList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
