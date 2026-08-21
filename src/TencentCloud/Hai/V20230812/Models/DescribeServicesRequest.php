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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServices请求参数结构体
 *
 * @method array getServiceIds() 获取<p>服务列表</p>
 * @method void setServiceIds(array $ServiceIds) 设置<p>服务列表</p>
 * @method integer getLimit() 获取<p>分页大小</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method array getStates() 获取<p>实例状态</p><p>枚举值：</p><ul><li>RUNNING： 运行中</li><li>CREATING： 创建中</li><li>CREATE_FAILED： 部署失败</li><li>DELETING： 删除中</li><li>UPDATING： 更新中</li><li>RESTARTING： 重启中</li><li>ISOLATING： 隔离中</li><li>ARREARS： 欠费中</li><li>RESTORING： 冲正恢复中</li></ul>
 * @method void setStates(array $States) 设置<p>实例状态</p><p>枚举值：</p><ul><li>RUNNING： 运行中</li><li>CREATING： 创建中</li><li>CREATE_FAILED： 部署失败</li><li>DELETING： 删除中</li><li>UPDATING： 更新中</li><li>RESTARTING： 重启中</li><li>ISOLATING： 隔离中</li><li>ARREARS： 欠费中</li><li>RESTORING： 冲正恢复中</li></ul>
 */
class DescribeServicesRequest extends AbstractModel
{
    /**
     * @var array <p>服务列表</p>
     */
    public $ServiceIds;

    /**
     * @var integer <p>分页大小</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var array <p>实例状态</p><p>枚举值：</p><ul><li>RUNNING： 运行中</li><li>CREATING： 创建中</li><li>CREATE_FAILED： 部署失败</li><li>DELETING： 删除中</li><li>UPDATING： 更新中</li><li>RESTARTING： 重启中</li><li>ISOLATING： 隔离中</li><li>ARREARS： 欠费中</li><li>RESTORING： 冲正恢复中</li></ul>
     */
    public $States;

    /**
     * @param array $ServiceIds <p>服务列表</p>
     * @param integer $Limit <p>分页大小</p>
     * @param integer $Offset <p>偏移量</p>
     * @param array $States <p>实例状态</p><p>枚举值：</p><ul><li>RUNNING： 运行中</li><li>CREATING： 创建中</li><li>CREATE_FAILED： 部署失败</li><li>DELETING： 删除中</li><li>UPDATING： 更新中</li><li>RESTARTING： 重启中</li><li>ISOLATING： 隔离中</li><li>ARREARS： 欠费中</li><li>RESTORING： 冲正恢复中</li></ul>
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
        if (array_key_exists("ServiceIds",$param) and $param["ServiceIds"] !== null) {
            $this->ServiceIds = $param["ServiceIds"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("States",$param) and $param["States"] !== null) {
            $this->States = $param["States"];
        }
    }
}
