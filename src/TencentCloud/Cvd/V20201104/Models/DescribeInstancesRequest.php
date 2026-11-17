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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>拉取页号</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>拉取页号</p>
 * @method integer getPageSize() 获取<p>每页拉取个数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页拉取个数</p>
 * @method array getFilters() 获取<p>云桌面查询接口 Name 过滤参数取值说明</p><p>一、基础属性</p><p>InstanceId 按云桌面 ID 搜索，示例：cdi-l0dfy594htvbn37<br>Name 按云桌面名称搜索<br>HostName 按云桌面机器名称搜索，示例：l0dfy594htvbn37<br>ImageId 按镜像 ID 搜索，示例：img-ed892xcd2<br>ImageName 按镜像名称搜索（已废弃）</p><p>二、地域 Region</p><p>ap-beijing 北京<br>ap-shanghai 上海<br>ap-guangzhou 广州<br>ap-shanghai-adc 上海自动驾驶云</p><p>三、计费模式 ChargeType</p><p>PREPAID 包年包月<br>POSTPAID_BY_HOUR 按量计费</p><p>四、桌面状态 Status</p><p>PENDING 创建中<br>STARTING 开机中<br>REBOOTING 重启中<br>ROLLBACKING 回滚中<br>RESETTING 重置中<br>STOPPING 关机中<br>TERMINATING 销毁中<br>RUNNING 运行中<br>USING 使用中<br>STOPPED 关机<br>ISOLATING 隔离中（只返回最近 24 小时数据）<br>SHUTDOWN 销毁（只返回最近 24 小时数据）<br>DELETED 销毁，与 SHUTDOWN 意义一致（只返回最近 24 小时数据）<br>LAUNCH_FAILED 创建失败（只返回最近 24 小时数据）</p><p>五、云桌面类型 Type</p><p>标准型：<br>S3L.MEDIUM4 标准 S3_2 核 4G<br>S3L.LARGE8 标准 S3_4 核 8G<br>S3L.LARGE16 标准 S3_4 核 16G<br>S3L.2XLARGE16 标准 S3_8 核 16G<br>S1L.LARGE8 标准 S1_4 核 8G<br>S1L.LARGE16 标准 S1_4 核 16G<br>S2L.2XLARGE16 标准 S2_8 核 16G</p><p>图形型：<br>G1L.LARGE16 图形 G1_4 核 16G<br>G1L.2XLARGE32 图形 G1_8 核 32G<br>G1L.4XLARGE64 图形 G1_16 核 64G<br>G2L.LARGE24 图形 G2_6 核 24G<br>G2L.3XLARGE44 图形 G2_12 核 44G<br>G2L.3XLARGE58 图形 G2_14 核 58G<br>G3L.LARGE16 图形 G3_4 核 16G<br>G3L.5XMEDIUM40 图形 G3_10 核 40G<br>G3L.5XLARGE80 图形 G3_20 核 80G<br>G4L.5XMEDIUM40 图形 G4_10 核 40G<br>G4L.11XMEDIUM80 图形 G4_22 核 80G<br>G4L.11XLARGE160 图形 G4_44 核 160G<br>G5L.5XMEDIUM40 图形 G5_10 核 40G<br>G5L.5XLARGE80 图形 G5_22 核 80G<br>G5L.21XMEDIUM160 图形 G5_42 核 160G<br>G5L.21XLARGE320 图形 G5_84 核 320G</p><p>六、网络相关</p><p>UserVpcId 按云桌面所属 VPC 搜索，示例：vpc-0ji679xf<br>UserSubnetId 按云桌面所属子网搜索，示例：subnet-0ji679xf<br>UserPrivateIp 按云桌面 IP 搜索</p><p>七、用户绑定</p><p>UserId 按绑定的用户 ID 搜索，示例：us-6b36f283c302481bb83b...<br>Keyword 按绑定的用户名搜索，Values 每次只取第一个值</p><p>八、安全组与策略</p><p>SecurityGroupId 按关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>AssociateSG 按可关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>DomainControlPolicyId 按关联域名管控策略搜索，Values 每次只取第一个值，示例：domain-0ji679xf<br>AssociateDomainControlPolicy 按可关联域名策略搜索<br>① 已有域名策略关联桌面：Values 每次只取第一个值，示例：domain-0ji679xf<br>② 新建域名策略关联桌面：Values 传空<br>PowerPolicyId 按关联电源管理策略搜索，Values 每次只取第一个值，示例：power-0ji679xf<br>AssociatePowerPolicy 按可关联电源管理策略搜索<br>① 已有电源管理策略关联桌面：Values 每次只取第一个值，示例：power-0ji679xf<br>② 新建电源管理策略关联桌面：Values 传空<br>WaterMarkPolicy 按关联水印策略搜索, Values 每次只取第一个值，示例：watermark-0ji679xf<br>AssociateWaterMarkPolicy 按可关联水印策略搜索<br>① 已有水印策略关联桌面：Values 每次只取第一个值，示例：watermark-0ji679xf<br>② 新建水印策略关联桌面：Values 传空<br>RunControlPolicyId 按关联运行管控策略搜索, Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>AssociateRunControlPolicy 按可关联运行管控策略搜索<br>① 已有运行管控策略关联桌面：Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>② 新建运行管控策略关联桌面：Values 传空</p><p>九、内部参数（外部租户请勿使用）</p><p>Uin 外部租户请勿使用<br>AppId 外部租户请勿使用</p>
 * @method void setFilters(array $Filters) 设置<p>云桌面查询接口 Name 过滤参数取值说明</p><p>一、基础属性</p><p>InstanceId 按云桌面 ID 搜索，示例：cdi-l0dfy594htvbn37<br>Name 按云桌面名称搜索<br>HostName 按云桌面机器名称搜索，示例：l0dfy594htvbn37<br>ImageId 按镜像 ID 搜索，示例：img-ed892xcd2<br>ImageName 按镜像名称搜索（已废弃）</p><p>二、地域 Region</p><p>ap-beijing 北京<br>ap-shanghai 上海<br>ap-guangzhou 广州<br>ap-shanghai-adc 上海自动驾驶云</p><p>三、计费模式 ChargeType</p><p>PREPAID 包年包月<br>POSTPAID_BY_HOUR 按量计费</p><p>四、桌面状态 Status</p><p>PENDING 创建中<br>STARTING 开机中<br>REBOOTING 重启中<br>ROLLBACKING 回滚中<br>RESETTING 重置中<br>STOPPING 关机中<br>TERMINATING 销毁中<br>RUNNING 运行中<br>USING 使用中<br>STOPPED 关机<br>ISOLATING 隔离中（只返回最近 24 小时数据）<br>SHUTDOWN 销毁（只返回最近 24 小时数据）<br>DELETED 销毁，与 SHUTDOWN 意义一致（只返回最近 24 小时数据）<br>LAUNCH_FAILED 创建失败（只返回最近 24 小时数据）</p><p>五、云桌面类型 Type</p><p>标准型：<br>S3L.MEDIUM4 标准 S3_2 核 4G<br>S3L.LARGE8 标准 S3_4 核 8G<br>S3L.LARGE16 标准 S3_4 核 16G<br>S3L.2XLARGE16 标准 S3_8 核 16G<br>S1L.LARGE8 标准 S1_4 核 8G<br>S1L.LARGE16 标准 S1_4 核 16G<br>S2L.2XLARGE16 标准 S2_8 核 16G</p><p>图形型：<br>G1L.LARGE16 图形 G1_4 核 16G<br>G1L.2XLARGE32 图形 G1_8 核 32G<br>G1L.4XLARGE64 图形 G1_16 核 64G<br>G2L.LARGE24 图形 G2_6 核 24G<br>G2L.3XLARGE44 图形 G2_12 核 44G<br>G2L.3XLARGE58 图形 G2_14 核 58G<br>G3L.LARGE16 图形 G3_4 核 16G<br>G3L.5XMEDIUM40 图形 G3_10 核 40G<br>G3L.5XLARGE80 图形 G3_20 核 80G<br>G4L.5XMEDIUM40 图形 G4_10 核 40G<br>G4L.11XMEDIUM80 图形 G4_22 核 80G<br>G4L.11XLARGE160 图形 G4_44 核 160G<br>G5L.5XMEDIUM40 图形 G5_10 核 40G<br>G5L.5XLARGE80 图形 G5_22 核 80G<br>G5L.21XMEDIUM160 图形 G5_42 核 160G<br>G5L.21XLARGE320 图形 G5_84 核 320G</p><p>六、网络相关</p><p>UserVpcId 按云桌面所属 VPC 搜索，示例：vpc-0ji679xf<br>UserSubnetId 按云桌面所属子网搜索，示例：subnet-0ji679xf<br>UserPrivateIp 按云桌面 IP 搜索</p><p>七、用户绑定</p><p>UserId 按绑定的用户 ID 搜索，示例：us-6b36f283c302481bb83b...<br>Keyword 按绑定的用户名搜索，Values 每次只取第一个值</p><p>八、安全组与策略</p><p>SecurityGroupId 按关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>AssociateSG 按可关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>DomainControlPolicyId 按关联域名管控策略搜索，Values 每次只取第一个值，示例：domain-0ji679xf<br>AssociateDomainControlPolicy 按可关联域名策略搜索<br>① 已有域名策略关联桌面：Values 每次只取第一个值，示例：domain-0ji679xf<br>② 新建域名策略关联桌面：Values 传空<br>PowerPolicyId 按关联电源管理策略搜索，Values 每次只取第一个值，示例：power-0ji679xf<br>AssociatePowerPolicy 按可关联电源管理策略搜索<br>① 已有电源管理策略关联桌面：Values 每次只取第一个值，示例：power-0ji679xf<br>② 新建电源管理策略关联桌面：Values 传空<br>WaterMarkPolicy 按关联水印策略搜索, Values 每次只取第一个值，示例：watermark-0ji679xf<br>AssociateWaterMarkPolicy 按可关联水印策略搜索<br>① 已有水印策略关联桌面：Values 每次只取第一个值，示例：watermark-0ji679xf<br>② 新建水印策略关联桌面：Values 传空<br>RunControlPolicyId 按关联运行管控策略搜索, Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>AssociateRunControlPolicy 按可关联运行管控策略搜索<br>① 已有运行管控策略关联桌面：Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>② 新建运行管控策略关联桌面：Values 传空</p><p>九、内部参数（外部租户请勿使用）</p><p>Uin 外部租户请勿使用<br>AppId 外部租户请勿使用</p>
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>拉取页号</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页拉取个数</p>
     */
    public $PageSize;

    /**
     * @var array <p>云桌面查询接口 Name 过滤参数取值说明</p><p>一、基础属性</p><p>InstanceId 按云桌面 ID 搜索，示例：cdi-l0dfy594htvbn37<br>Name 按云桌面名称搜索<br>HostName 按云桌面机器名称搜索，示例：l0dfy594htvbn37<br>ImageId 按镜像 ID 搜索，示例：img-ed892xcd2<br>ImageName 按镜像名称搜索（已废弃）</p><p>二、地域 Region</p><p>ap-beijing 北京<br>ap-shanghai 上海<br>ap-guangzhou 广州<br>ap-shanghai-adc 上海自动驾驶云</p><p>三、计费模式 ChargeType</p><p>PREPAID 包年包月<br>POSTPAID_BY_HOUR 按量计费</p><p>四、桌面状态 Status</p><p>PENDING 创建中<br>STARTING 开机中<br>REBOOTING 重启中<br>ROLLBACKING 回滚中<br>RESETTING 重置中<br>STOPPING 关机中<br>TERMINATING 销毁中<br>RUNNING 运行中<br>USING 使用中<br>STOPPED 关机<br>ISOLATING 隔离中（只返回最近 24 小时数据）<br>SHUTDOWN 销毁（只返回最近 24 小时数据）<br>DELETED 销毁，与 SHUTDOWN 意义一致（只返回最近 24 小时数据）<br>LAUNCH_FAILED 创建失败（只返回最近 24 小时数据）</p><p>五、云桌面类型 Type</p><p>标准型：<br>S3L.MEDIUM4 标准 S3_2 核 4G<br>S3L.LARGE8 标准 S3_4 核 8G<br>S3L.LARGE16 标准 S3_4 核 16G<br>S3L.2XLARGE16 标准 S3_8 核 16G<br>S1L.LARGE8 标准 S1_4 核 8G<br>S1L.LARGE16 标准 S1_4 核 16G<br>S2L.2XLARGE16 标准 S2_8 核 16G</p><p>图形型：<br>G1L.LARGE16 图形 G1_4 核 16G<br>G1L.2XLARGE32 图形 G1_8 核 32G<br>G1L.4XLARGE64 图形 G1_16 核 64G<br>G2L.LARGE24 图形 G2_6 核 24G<br>G2L.3XLARGE44 图形 G2_12 核 44G<br>G2L.3XLARGE58 图形 G2_14 核 58G<br>G3L.LARGE16 图形 G3_4 核 16G<br>G3L.5XMEDIUM40 图形 G3_10 核 40G<br>G3L.5XLARGE80 图形 G3_20 核 80G<br>G4L.5XMEDIUM40 图形 G4_10 核 40G<br>G4L.11XMEDIUM80 图形 G4_22 核 80G<br>G4L.11XLARGE160 图形 G4_44 核 160G<br>G5L.5XMEDIUM40 图形 G5_10 核 40G<br>G5L.5XLARGE80 图形 G5_22 核 80G<br>G5L.21XMEDIUM160 图形 G5_42 核 160G<br>G5L.21XLARGE320 图形 G5_84 核 320G</p><p>六、网络相关</p><p>UserVpcId 按云桌面所属 VPC 搜索，示例：vpc-0ji679xf<br>UserSubnetId 按云桌面所属子网搜索，示例：subnet-0ji679xf<br>UserPrivateIp 按云桌面 IP 搜索</p><p>七、用户绑定</p><p>UserId 按绑定的用户 ID 搜索，示例：us-6b36f283c302481bb83b...<br>Keyword 按绑定的用户名搜索，Values 每次只取第一个值</p><p>八、安全组与策略</p><p>SecurityGroupId 按关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>AssociateSG 按可关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>DomainControlPolicyId 按关联域名管控策略搜索，Values 每次只取第一个值，示例：domain-0ji679xf<br>AssociateDomainControlPolicy 按可关联域名策略搜索<br>① 已有域名策略关联桌面：Values 每次只取第一个值，示例：domain-0ji679xf<br>② 新建域名策略关联桌面：Values 传空<br>PowerPolicyId 按关联电源管理策略搜索，Values 每次只取第一个值，示例：power-0ji679xf<br>AssociatePowerPolicy 按可关联电源管理策略搜索<br>① 已有电源管理策略关联桌面：Values 每次只取第一个值，示例：power-0ji679xf<br>② 新建电源管理策略关联桌面：Values 传空<br>WaterMarkPolicy 按关联水印策略搜索, Values 每次只取第一个值，示例：watermark-0ji679xf<br>AssociateWaterMarkPolicy 按可关联水印策略搜索<br>① 已有水印策略关联桌面：Values 每次只取第一个值，示例：watermark-0ji679xf<br>② 新建水印策略关联桌面：Values 传空<br>RunControlPolicyId 按关联运行管控策略搜索, Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>AssociateRunControlPolicy 按可关联运行管控策略搜索<br>① 已有运行管控策略关联桌面：Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>② 新建运行管控策略关联桌面：Values 传空</p><p>九、内部参数（外部租户请勿使用）</p><p>Uin 外部租户请勿使用<br>AppId 外部租户请勿使用</p>
     */
    public $Filters;

    /**
     * @param integer $PageNumber <p>拉取页号</p>
     * @param integer $PageSize <p>每页拉取个数</p>
     * @param array $Filters <p>云桌面查询接口 Name 过滤参数取值说明</p><p>一、基础属性</p><p>InstanceId 按云桌面 ID 搜索，示例：cdi-l0dfy594htvbn37<br>Name 按云桌面名称搜索<br>HostName 按云桌面机器名称搜索，示例：l0dfy594htvbn37<br>ImageId 按镜像 ID 搜索，示例：img-ed892xcd2<br>ImageName 按镜像名称搜索（已废弃）</p><p>二、地域 Region</p><p>ap-beijing 北京<br>ap-shanghai 上海<br>ap-guangzhou 广州<br>ap-shanghai-adc 上海自动驾驶云</p><p>三、计费模式 ChargeType</p><p>PREPAID 包年包月<br>POSTPAID_BY_HOUR 按量计费</p><p>四、桌面状态 Status</p><p>PENDING 创建中<br>STARTING 开机中<br>REBOOTING 重启中<br>ROLLBACKING 回滚中<br>RESETTING 重置中<br>STOPPING 关机中<br>TERMINATING 销毁中<br>RUNNING 运行中<br>USING 使用中<br>STOPPED 关机<br>ISOLATING 隔离中（只返回最近 24 小时数据）<br>SHUTDOWN 销毁（只返回最近 24 小时数据）<br>DELETED 销毁，与 SHUTDOWN 意义一致（只返回最近 24 小时数据）<br>LAUNCH_FAILED 创建失败（只返回最近 24 小时数据）</p><p>五、云桌面类型 Type</p><p>标准型：<br>S3L.MEDIUM4 标准 S3_2 核 4G<br>S3L.LARGE8 标准 S3_4 核 8G<br>S3L.LARGE16 标准 S3_4 核 16G<br>S3L.2XLARGE16 标准 S3_8 核 16G<br>S1L.LARGE8 标准 S1_4 核 8G<br>S1L.LARGE16 标准 S1_4 核 16G<br>S2L.2XLARGE16 标准 S2_8 核 16G</p><p>图形型：<br>G1L.LARGE16 图形 G1_4 核 16G<br>G1L.2XLARGE32 图形 G1_8 核 32G<br>G1L.4XLARGE64 图形 G1_16 核 64G<br>G2L.LARGE24 图形 G2_6 核 24G<br>G2L.3XLARGE44 图形 G2_12 核 44G<br>G2L.3XLARGE58 图形 G2_14 核 58G<br>G3L.LARGE16 图形 G3_4 核 16G<br>G3L.5XMEDIUM40 图形 G3_10 核 40G<br>G3L.5XLARGE80 图形 G3_20 核 80G<br>G4L.5XMEDIUM40 图形 G4_10 核 40G<br>G4L.11XMEDIUM80 图形 G4_22 核 80G<br>G4L.11XLARGE160 图形 G4_44 核 160G<br>G5L.5XMEDIUM40 图形 G5_10 核 40G<br>G5L.5XLARGE80 图形 G5_22 核 80G<br>G5L.21XMEDIUM160 图形 G5_42 核 160G<br>G5L.21XLARGE320 图形 G5_84 核 320G</p><p>六、网络相关</p><p>UserVpcId 按云桌面所属 VPC 搜索，示例：vpc-0ji679xf<br>UserSubnetId 按云桌面所属子网搜索，示例：subnet-0ji679xf<br>UserPrivateIp 按云桌面 IP 搜索</p><p>七、用户绑定</p><p>UserId 按绑定的用户 ID 搜索，示例：us-6b36f283c302481bb83b...<br>Keyword 按绑定的用户名搜索，Values 每次只取第一个值</p><p>八、安全组与策略</p><p>SecurityGroupId 按关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>AssociateSG 按可关联安全组搜索，Values 每次只取第一个值，示例：sg-0ji679xf<br>DomainControlPolicyId 按关联域名管控策略搜索，Values 每次只取第一个值，示例：domain-0ji679xf<br>AssociateDomainControlPolicy 按可关联域名策略搜索<br>① 已有域名策略关联桌面：Values 每次只取第一个值，示例：domain-0ji679xf<br>② 新建域名策略关联桌面：Values 传空<br>PowerPolicyId 按关联电源管理策略搜索，Values 每次只取第一个值，示例：power-0ji679xf<br>AssociatePowerPolicy 按可关联电源管理策略搜索<br>① 已有电源管理策略关联桌面：Values 每次只取第一个值，示例：power-0ji679xf<br>② 新建电源管理策略关联桌面：Values 传空<br>WaterMarkPolicy 按关联水印策略搜索, Values 每次只取第一个值，示例：watermark-0ji679xf<br>AssociateWaterMarkPolicy 按可关联水印策略搜索<br>① 已有水印策略关联桌面：Values 每次只取第一个值，示例：watermark-0ji679xf<br>② 新建水印策略关联桌面：Values 传空<br>RunControlPolicyId 按关联运行管控策略搜索, Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>AssociateRunControlPolicy 按可关联运行管控策略搜索<br>① 已有运行管控策略关联桌面：Values 每次只取第一个值，示例：appctl-run-0ji679xf<br>② 新建运行管控策略关联桌面：Values 传空</p><p>九、内部参数（外部租户请勿使用）</p><p>Uin 外部租户请勿使用<br>AppId 外部租户请勿使用</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
