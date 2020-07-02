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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组关联的实例统计
 *
 * @method string getSecurityGroupId() 获取安全组实例ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组实例ID。
 * @method integer getCVM() 获取云服务器实例数。
 * @method void setCVM(integer $CVM) 设置云服务器实例数。
 * @method integer getCDB() 获取数据库实例数。
 * @method void setCDB(integer $CDB) 设置数据库实例数。
 * @method integer getENI() 获取弹性网卡实例数。
 * @method void setENI(integer $ENI) 设置弹性网卡实例数。
 * @method integer getSG() 获取被安全组引用数。
 * @method void setSG(integer $SG) 设置被安全组引用数。
 * @method integer getCLB() 获取负载均衡实例数。
 * @method void setCLB(integer $CLB) 设置负载均衡实例数。
 * @method array getInstanceStatistics() 获取全量实例的绑定统计。
 * @method void setInstanceStatistics(array $InstanceStatistics) 设置全量实例的绑定统计。
 * @method integer getTotalCount() 获取所有资源的总计数（不包含被安全组引用数）。
 * @method void setTotalCount(integer $TotalCount) 设置所有资源的总计数（不包含被安全组引用数）。
 */
class SecurityGroupAssociationStatistics extends AbstractModel
{
    /**
     * @var string 安全组实例ID。
     */
    public $SecurityGroupId;

    /**
     * @var integer 云服务器实例数。
     */
    public $CVM;

    /**
     * @var integer 数据库实例数。
     */
    public $CDB;

    /**
     * @var integer 弹性网卡实例数。
     */
    public $ENI;

    /**
     * @var integer 被安全组引用数。
     */
    public $SG;

    /**
     * @var integer 负载均衡实例数。
     */
    public $CLB;

    /**
     * @var array 全量实例的绑定统计。
     */
    public $InstanceStatistics;

    /**
     * @var integer 所有资源的总计数（不包含被安全组引用数）。
     */
    public $TotalCount;

    /**
     * @param string $SecurityGroupId 安全组实例ID。
     * @param integer $CVM 云服务器实例数。
     * @param integer $CDB 数据库实例数。
     * @param integer $ENI 弹性网卡实例数。
     * @param integer $SG 被安全组引用数。
     * @param integer $CLB 负载均衡实例数。
     * @param array $InstanceStatistics 全量实例的绑定统计。
     * @param integer $TotalCount 所有资源的总计数（不包含被安全组引用数）。
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
        if (array_key_exists('SecurityGroupId',$param) and $param['SecurityGroupId'] !== null) {
            $this->SecurityGroupId = $param['SecurityGroupId'];
        }

        if (array_key_exists('CVM',$param) and $param['CVM'] !== null) {
            $this->CVM = $param['CVM'];
        }

        if (array_key_exists('CDB',$param) and $param['CDB'] !== null) {
            $this->CDB = $param['CDB'];
        }

        if (array_key_exists('ENI',$param) and $param['ENI'] !== null) {
            $this->ENI = $param['ENI'];
        }

        if (array_key_exists('SG',$param) and $param['SG'] !== null) {
            $this->SG = $param['SG'];
        }

        if (array_key_exists('CLB',$param) and $param['CLB'] !== null) {
            $this->CLB = $param['CLB'];
        }

        if (array_key_exists('InstanceStatistics',$param) and $param['InstanceStatistics'] !== null) {
            $this->InstanceStatistics = [];
            foreach ($param['InstanceStatistics'] as $key => $value){
                $obj = new InstanceStatistic();
                $obj->deserialize($value);
                array_push($this->InstanceStatistics, $obj);
            }
        }

        if (array_key_exists('TotalCount',$param) and $param['TotalCount'] !== null) {
            $this->TotalCount = $param['TotalCount'];
        }
    }
}
