<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationTriggerLogPersonal请求参数结构体
 *
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回最大数量，默认 20, 最大值 100
 * @method void setLimit(integer $Limit) 设置返回最大数量，默认 20, 最大值 100
 * @method string getOrder() 获取升序或降序
 * @method void setOrder(string $Order) 设置升序或降序
 * @method string getOrderBy() 获取按某列排序
 * @method void setOrderBy(string $OrderBy) 设置按某列排序
 */
class DescribeApplicationTriggerLogPersonalRequest extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回最大数量，默认 20, 最大值 100
     */
    public $Limit;

    /**
     * @var string 升序或降序
     */
    public $Order;

    /**
     * @var string 按某列排序
     */
    public $OrderBy;

    /**
     * @param string $RepoName 仓库名称
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回最大数量，默认 20, 最大值 100
     * @param string $Order 升序或降序
     * @param string $OrderBy 按某列排序
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
        if (array_key_exists('RepoName',$param) and $param['RepoName'] !== null) {
            $this->RepoName = $param['RepoName'];
        }

        if (array_key_exists('Offset',$param) and $param['Offset'] !== null) {
            $this->Offset = $param['Offset'];
        }

        if (array_key_exists('Limit',$param) and $param['Limit'] !== null) {
            $this->Limit = $param['Limit'];
        }

        if (array_key_exists('Order',$param) and $param['Order'] !== null) {
            $this->Order = $param['Order'];
        }

        if (array_key_exists('OrderBy',$param) and $param['OrderBy'] !== null) {
            $this->OrderBy = $param['OrderBy'];
        }
    }
}
