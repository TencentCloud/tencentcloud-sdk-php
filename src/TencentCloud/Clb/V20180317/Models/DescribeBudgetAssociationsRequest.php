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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBudgetAssociations请求参数结构体
 *
 * @method string getBudgetId() 获取<p>Budget ID。</p><p>一次只允许查询一个Budget。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>Budget ID。</p><p>一次只允许查询一个Budget。</p>
 * @method string getType() 获取<p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul><p>不传时返回全部资源类型。</p>
 * @method void setType(string $Type) 设置<p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul><p>不传时返回全部资源类型。</p>
 * @method integer getOffset() 获取<p>本次查询偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>本次查询偏移量</p>
 * @method integer getLimit() 获取<p>本次查询限制的数量</p>
 * @method void setLimit(integer $Limit) 设置<p>本次查询限制的数量</p>
 */
class DescribeBudgetAssociationsRequest extends AbstractModel
{
    /**
     * @var string <p>Budget ID。</p><p>一次只允许查询一个Budget。</p>
     */
    public $BudgetId;

    /**
     * @var string <p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul><p>不传时返回全部资源类型。</p>
     */
    public $Type;

    /**
     * @var integer <p>本次查询偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>本次查询限制的数量</p>
     */
    public $Limit;

    /**
     * @param string $BudgetId <p>Budget ID。</p><p>一次只允许查询一个Budget。</p>
     * @param string $Type <p>资源类型。</p><p>枚举值：</p><ul><li>ModelRouter：模型路由实例</li><li>Key：模型路由Key</li></ul><p>不传时返回全部资源类型。</p>
     * @param integer $Offset <p>本次查询偏移量</p>
     * @param integer $Limit <p>本次查询限制的数量</p>
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
