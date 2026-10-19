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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作流统一调度参数入参
依赖任务信息

取值说明表：

| 当前任务周期类型 | 上游任务周期类型 | 配置方式 | MainCyclicConfig取值 | 时间维度/实例范围           | SubordinateCyclicConfig取值       | offset取值             |
| ---------------- | ---------------- | -------- | -------------------- | --------------------------- | --------------------------------- | ---------------------- |
| HOUR_CYCLE       | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| MINUTE_CYCLE     | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| DAY_CYCLE        | WEEK_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| DAY_CYCLE        | WEEK_CYCLE       | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| HOUR_CYCLE       | HOUR_CYCLE       | 推荐策略 | HOUR                 | 按小时/最近实例             | CURRENT_HOUR                      | 无                     |
| HOUR_CYCLE       | HOUR_CYCLE       | 推荐策略 | HOUR                 | 按小时/前一周期             | PREVIOUS_HOUR_CYCLE               | 无                     |
| HOUR_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | WEEK                 | 按周/上周                   | PREVIOUS_WEEK                     | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | WEEK                 | 按周/上周五                 | PREVIOUS_FRIDAY                   | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | WEEK                 | 按周/上周日                 | PREVIOUS_WEEKEND                  | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天         、          | CURRENT_DAY                       | 无                     |
| WEEK_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/前一天                 | PREVIOUS_DAY                      | 无                     |
| WEEK_CYCLE       | ONEOFF_CYCLE     | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| HOUR_CYCLE       | MINUTE_CYCLE     | 推荐策略 | HOUR                 | 按小时/前一个小时(-60,0]    | PREVIOUS_HOUR_LATER_OFFSET_MINUTE | 无                     |
| HOUR_CYCLE       | MINUTE_CYCLE     | 推荐策略 | HOUR                 | 按小时/前一个小时           | PREVIOUS_HOUR                     | 无                     |
| HOUR_CYCLE       | MINUTE_CYCLE     | 推荐策略 | HOUR                 | 按小时/当前小时             | CURRENT_HOUR                      | 无                     |
| YEAR_CYCLE       | WEEK_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| WEEK_CYCLE       | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| MINUTE_CYCLE     | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| WEEK_CYCLE       | HOUR_CYCLE       | 推荐策略 | WEEK                 | 按周/上周                   | PREVIOUS_WEEK                     | 无                     |
| WEEK_CYCLE       | HOUR_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| MINUTE_CYCLE     | HOUR_CYCLE       | 推荐策略 | HOUR                 | 按小时/当前小时             | CURRENT_HOUR                      | 无                     |
| HOUR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | HOUR_CYCLE       | 推荐策略 | MONTH                | 按月/上月                   | PREVIOUS_MONTH                    | 无                     |
| MONTH_CYCLE      | HOUR_CYCLE       | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | ONEOFF_CYCLE     | 推荐策略 | MONTH                | 按月/当月                   | CURRENT_MONTH                     | 无                     |
| DAY_CYCLE        | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| DAY_CYCLE        | MONTH_CYCLE      | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| MONTH_CYCLE      | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| ONEOFF_CYCLE     | WEEK_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| MINUTE_CYCLE     | MINUTE_CYCLE     | 推荐策略 | MINUTE               | 按分钟/当前分钟             | CURRENT_MINUTE                    | 无                     |
| MINUTE_CYCLE     | MINUTE_CYCLE     | 推荐策略 | MINUTE               | 按分钟/前一周期             | PREVIOUS_MINUTE_CYCLE             | 无                     |
| YEAR_CYCLE       | MINUTE_CYCLE     | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| ONEOFF_CYCLE     | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| DAY_CYCLE        | MINUTE_CYCLE     | 推荐策略 | DAY                  | 按天/前一天(-24 * 60,0]     | PREVIOUS_DAY_LATER_OFFSET_MINUTE  | 无                     |
| DAY_CYCLE        | MINUTE_CYCLE     | 推荐策略 | DAY                  | 按天/前一天                 | PREVIOUS_DAY                      | 无                     |
| DAY_CYCLE        | MINUTE_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| MINUTE_CYCLE     | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| WEEK_CYCLE       | WEEK_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| WEEK_CYCLE       | WEEK_CYCLE       | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| YEAR_CYCLE       | YEAR_CYCLE       | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| YEAR_CYCLE       | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| YEAR_CYCLE       | HOUR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| MINUTE_CYCLE     | WEEK_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| ONEOFF_CYCLE     | MINUTE_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| HOUR_CYCLE       | ONEOFF_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| WEEK_CYCLE       | MINUTE_CYCLE     | 推荐策略 | WEEK                 | 按周/上周                   | PREVIOUS_WEEK                     | 无                     |
| WEEK_CYCLE       | MINUTE_CYCLE     | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| DAY_CYCLE        | HOUR_CYCLE       | 推荐策略 | DAY                  | 按天/前一天(-24,0]          | PREVIOUS_DAY_LATER_OFFSET_HOUR    | 无                     |
| DAY_CYCLE        | HOUR_CYCLE       | 推荐策略 | DAY                  | 按天/前一天[-24,0)          | PREVIOUS_DAY                      | 无                     |
| DAY_CYCLE        | HOUR_CYCLE       | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本年所有月             | ALL_MONTH_OF_YEAR                 | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/上月                   | PREVIOUS_MONTH                    | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/上月末                 | PREVIOUS_END_OF_MONTH             | 无                     |
| YEAR_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/上月初                 | PREVIOUS_BEGIN_OF_MONTH           | 无                     |
| ONEOFF_CYCLE     | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| DAY_CYCLE        | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| ONEOFF_CYCLE     | HOUR_CYCLE       | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| DAY_CYCLE        | ONEOFF_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| MINUTE_CYCLE     | ONEOFF_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| WEEK_CYCLE       | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| WEEK_CYCLE       | MONTH_CYCLE      | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| YEAR_CYCLE       | ONEOFF_CYCLE     | 推荐策略 | YEAR                 | 按年/当年                   | CURRENT_YEAR                      | 无                     |
| MONTH_CYCLE      | DAY_CYCLE        | 推荐策略 | MONTH                | 按月/上月                   | PREVIOUS_MONTH                    | 无                     |
| MONTH_CYCLE      | DAY_CYCLE        | 推荐策略 | MONTH                | 按月/上月末                 | PREVIOUS_END_OF_MONTH             | 无                     |
| MONTH_CYCLE      | DAY_CYCLE        | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| MONTH_CYCLE      | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/前一天                 | PREVIOUS_DAY                      | 无                     |
| YEAR_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/本年所有天             | ALL_DAY_OF_YEAR                   | 无                     |
| YEAR_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| YEAR_CYCLE       | DAY_CYCLE        | 推荐策略 | DAY                  | 按天/前一天                 | PREVIOUS_DAY                      | 无                     |
| HOUR_CYCLE       | WEEK_CYCLE       | 推荐策略 | WEEK                 | 按周/本周                   | CURRENT_WEEK                      | 无                     |
| MONTH_CYCLE      | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/当月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | MONTH_CYCLE      | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| MONTH_CYCLE      | MINUTE_CYCLE     | 推荐策略 | MONTH                | 按月/上月                   | PREVIOUS_MONTH                    | 无                     |
| MONTH_CYCLE      | MINUTE_CYCLE     | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | WEEK_CYCLE       | 推荐策略 | MONTH                | 按月/上月                   | PREVIOUS_MONTH                    | 无                     |
| MONTH_CYCLE      | WEEK_CYCLE       | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| MONTH_CYCLE      | WEEK_CYCLE       | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| DAY_CYCLE        | YEAR_CYCLE       | 推荐策略 | YEAR                 | 按年/本年                   | CURRENT_YEAR                      | 无                     |
| DAY_CYCLE        | YEAR_CYCLE       | 推荐策略 | DAY                  | 按天/最近一次数据时间的实例 | RECENT_DATE                       | 无                     |
| ONEOFF_CYCLE     | ONEOFF_CYCLE     | 推荐策略 | DAY                  | 按天/当天                   | CURRENT_DAY                       | 无                     |
| ONEOFF_CYCLE     | MONTH_CYCLE      | 推荐策略 | MONTH                | 按月/本月                   | CURRENT_MONTH                     | 无                     |
| CRONTAB_CYCLE    | CRONTAB_CYCLE    | 推荐策略 | CRONTAB              | 无                          | CURRENT                           | 无                     |
| HOUR_CYCLE       | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| HOUR_CYCLE       | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| HOUR_CYCLE       | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | HOUR_CYCLE       | 自定义   | RANGE_HOUR           | 区间(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | DAY_CYCLE        | 自定义   | RANGE_DAY            | 区间(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | MINUTE_CYCLE     | 自定义   | RANGE_MINUTE         | 区间(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| HOUR_CYCLE       | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| HOUR_CYCLE       | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| HOUR_CYCLE       | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| MINUTE_CYCLE     | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| WEEK_CYCLE       | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | HOUR_CYCLE       | 自定义   | LIST_HOUR            | 列表(小时)                  | 无                                | 逗号分隔的整数，如-1,0 |
| DAY_CYCLE        | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| YEAR_CYCLE       | DAY_CYCLE        | 自定义   | LIST_DAY             | 列表(天)                    | 无                                | 逗号分隔的整数，如-1,0 |
| MONTH_CYCLE      | MINUTE_CYCLE     | 自定义   | LIST_MINUTE          | 列表(分钟)                  | 无                                | 逗号分隔的整数，如-1,0 |
 *
 * @method string getScheduleTimeZone() 获取<p>时区</p>
 * @method void setScheduleTimeZone(string $ScheduleTimeZone) 设置<p>时区</p>
 * @method string getCycleType() 获取<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
 * @method void setCycleType(string $CycleType) 设置<p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
 * @method string getSelfDepend() 获取<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
 * @method void setSelfDepend(string $SelfDepend) 设置<p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
 * @method string getStartTime() 获取<p>生效开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>生效开始时间</p>
 * @method string getEndTime() 获取<p>生效结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>生效结束时间</p>
 * @method string getCrontabExpression() 获取<p>cron表达式</p>
 * @method void setCrontabExpression(string $CrontabExpression) 设置<p>cron表达式</p>
 * @method string getDependencyWorkflow() 获取<p>工作流依赖，yes or no</p>
 * @method void setDependencyWorkflow(string $DependencyWorkflow) 设置<p>工作流依赖，yes or no</p>
 * @method string getModifyCycleValue() 获取<p>0：不修改 1：将任务的上游依赖配置改为默认值</p>
 * @method void setModifyCycleValue(string $ModifyCycleValue) 设置<p>0：不修改 1：将任务的上游依赖配置改为默认值</p>
 * @method boolean getClearLink() 获取<p>工作流存在跨工作流依赖且使用cron表达式调度。如果保存统一调度，会断开不支持的依赖关系</p>
 * @method void setClearLink(boolean $ClearLink) 设置<p>工作流存在跨工作流依赖且使用cron表达式调度。如果保存统一调度，会断开不支持的依赖关系</p>
 * @method string getMainCyclicConfig() 获取<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度，取值为：</p><ul><li>CRONTAB</li><li>DAY</li><li>HOUR</li><li>LIST_DAY</li><li>LIST_HOUR</li><li>LIST_MINUTE</li><li>MINUTE</li><li>MONTH</li><li>RANGE_DAY</li><li>RANGE_HOUR</li><li>RANGE_MINUTE</li><li>WEEK</li><li>YEAR</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
 * @method void setMainCyclicConfig(string $MainCyclicConfig) 设置<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度，取值为：</p><ul><li>CRONTAB</li><li>DAY</li><li>HOUR</li><li>LIST_DAY</li><li>LIST_HOUR</li><li>LIST_MINUTE</li><li>MINUTE</li><li>MONTH</li><li>RANGE_DAY</li><li>RANGE_HOUR</li><li>RANGE_MINUTE</li><li>WEEK</li><li>YEAR</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
 * @method string getSubordinateCyclicConfig() 获取<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围<br>取值为：</p><ul><li>ALL_DAY_OF_YEAR</li><li>ALL_MONTH_OF_YEAR</li><li>CURRENT</li><li>CURRENT_DAY</li><li>CURRENT_HOUR</li><li>CURRENT_MINUTE</li><li>CURRENT_MONTH</li><li>CURRENT_WEEK</li><li>CURRENT_YEAR</li><li>PREVIOUS_BEGIN_OF_MONTH</li><li>PREVIOUS_DAY</li><li>PREVIOUS_DAY_LATER_OFFSET_HOUR</li><li>PREVIOUS_DAY_LATER_OFFSET_MINUTE</li><li>PREVIOUS_END_OF_MONTH</li><li>PREVIOUS_FRIDAY</li><li>PREVIOUS_HOUR</li><li>PREVIOUS_HOUR_CYCLE</li><li>PREVIOUS_HOUR_LATER_OFFSET_MINUTE</li><li>PREVIOUS_MINUTE_CYCLE</li><li>PREVIOUS_MONTH</li><li>PREVIOUS_WEEK</li><li>PREVIOUS_WEEKEND</li><li>RECENT_DATE</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
 * @method void setSubordinateCyclicConfig(string $SubordinateCyclicConfig) 设置<p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围<br>取值为：</p><ul><li>ALL_DAY_OF_YEAR</li><li>ALL_MONTH_OF_YEAR</li><li>CURRENT</li><li>CURRENT_DAY</li><li>CURRENT_HOUR</li><li>CURRENT_MINUTE</li><li>CURRENT_MONTH</li><li>CURRENT_WEEK</li><li>CURRENT_YEAR</li><li>PREVIOUS_BEGIN_OF_MONTH</li><li>PREVIOUS_DAY</li><li>PREVIOUS_DAY_LATER_OFFSET_HOUR</li><li>PREVIOUS_DAY_LATER_OFFSET_MINUTE</li><li>PREVIOUS_END_OF_MONTH</li><li>PREVIOUS_FRIDAY</li><li>PREVIOUS_HOUR</li><li>PREVIOUS_HOUR_CYCLE</li><li>PREVIOUS_HOUR_LATER_OFFSET_MINUTE</li><li>PREVIOUS_MINUTE_CYCLE</li><li>PREVIOUS_MONTH</li><li>PREVIOUS_WEEK</li><li>PREVIOUS_WEEKEND</li><li>RECENT_DATE</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
 * @method string getExecutionStartTime() 获取<p>执行时间左闭区间，示例：00:00，只有周期类型为MINUTE_CYCLE才需要填入</p>
 * @method void setExecutionStartTime(string $ExecutionStartTime) 设置<p>执行时间左闭区间，示例：00:00，只有周期类型为MINUTE_CYCLE才需要填入</p>
 * @method string getExecutionEndTime() 获取<p>执行时间右闭区间，示例：23:59，只有周期类型为MINUTE_CYCLE才需要填入</p>
 * @method void setExecutionEndTime(string $ExecutionEndTime) 设置<p>执行时间右闭区间，示例：23:59，只有周期类型为MINUTE_CYCLE才需要填入</p>
 * @method string getCalendarOpen() 获取<p>是否开启日历调度 1 开启 0关闭</p>
 * @method void setCalendarOpen(string $CalendarOpen) 设置<p>是否开启日历调度 1 开启 0关闭</p>
 * @method string getCalendarId() 获取<p>日历id</p>
 * @method void setCalendarId(string $CalendarId) 设置<p>日历id</p>
 * @method integer getMinuteOffset() 获取<p>分钟任务相位偏移</p>
 * @method void setMinuteOffset(integer $MinuteOffset) 设置<p>分钟任务相位偏移</p>
 */
class WorkflowSchedulerConfigurationInfo extends AbstractModel
{
    /**
     * @var string <p>时区</p>
     */
    public $ScheduleTimeZone;

    /**
     * @var string <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
     */
    public $CycleType;

    /**
     * @var string <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
     */
    public $SelfDepend;

    /**
     * @var string <p>生效开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>生效结束时间</p>
     */
    public $EndTime;

    /**
     * @var string <p>cron表达式</p>
     */
    public $CrontabExpression;

    /**
     * @var string <p>工作流依赖，yes or no</p>
     */
    public $DependencyWorkflow;

    /**
     * @var string <p>0：不修改 1：将任务的上游依赖配置改为默认值</p>
     */
    public $ModifyCycleValue;

    /**
     * @var boolean <p>工作流存在跨工作流依赖且使用cron表达式调度。如果保存统一调度，会断开不支持的依赖关系</p>
     */
    public $ClearLink;

    /**
     * @var string <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度，取值为：</p><ul><li>CRONTAB</li><li>DAY</li><li>HOUR</li><li>LIST_DAY</li><li>LIST_HOUR</li><li>LIST_MINUTE</li><li>MINUTE</li><li>MONTH</li><li>RANGE_DAY</li><li>RANGE_HOUR</li><li>RANGE_MINUTE</li><li>WEEK</li><li>YEAR</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
     */
    public $MainCyclicConfig;

    /**
     * @var string <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围<br>取值为：</p><ul><li>ALL_DAY_OF_YEAR</li><li>ALL_MONTH_OF_YEAR</li><li>CURRENT</li><li>CURRENT_DAY</li><li>CURRENT_HOUR</li><li>CURRENT_MINUTE</li><li>CURRENT_MONTH</li><li>CURRENT_WEEK</li><li>CURRENT_YEAR</li><li>PREVIOUS_BEGIN_OF_MONTH</li><li>PREVIOUS_DAY</li><li>PREVIOUS_DAY_LATER_OFFSET_HOUR</li><li>PREVIOUS_DAY_LATER_OFFSET_MINUTE</li><li>PREVIOUS_END_OF_MONTH</li><li>PREVIOUS_FRIDAY</li><li>PREVIOUS_HOUR</li><li>PREVIOUS_HOUR_CYCLE</li><li>PREVIOUS_HOUR_LATER_OFFSET_MINUTE</li><li>PREVIOUS_MINUTE_CYCLE</li><li>PREVIOUS_MONTH</li><li>PREVIOUS_WEEK</li><li>PREVIOUS_WEEKEND</li><li>RECENT_DATE</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
     */
    public $SubordinateCyclicConfig;

    /**
     * @var string <p>执行时间左闭区间，示例：00:00，只有周期类型为MINUTE_CYCLE才需要填入</p>
     */
    public $ExecutionStartTime;

    /**
     * @var string <p>执行时间右闭区间，示例：23:59，只有周期类型为MINUTE_CYCLE才需要填入</p>
     */
    public $ExecutionEndTime;

    /**
     * @var string <p>是否开启日历调度 1 开启 0关闭</p>
     */
    public $CalendarOpen;

    /**
     * @var string <p>日历id</p>
     */
    public $CalendarId;

    /**
     * @var integer <p>分钟任务相位偏移</p>
     */
    public $MinuteOffset;

    /**
     * @param string $ScheduleTimeZone <p>时区</p>
     * @param string $CycleType <p>周期类型：支持的类型为<br>ONEOFF_CYCLE: 一次性<br>YEAR_CYCLE: 年<br>MONTH_CYCLE: 月<br>WEEK_CYCLE: 周<br>DAY_CYCLE: 天<br>HOUR_CYCLE: 小时<br>MINUTE_CYCLE: 分钟<br>CRONTAB_CYCLE: crontab表达式类型</p>
     * @param string $SelfDepend <p>自依赖, 默认值 serial, 取值为：parallel(并行), serial(串行), orderly(有序)</p>
     * @param string $StartTime <p>生效开始时间</p>
     * @param string $EndTime <p>生效结束时间</p>
     * @param string $CrontabExpression <p>cron表达式</p>
     * @param string $DependencyWorkflow <p>工作流依赖，yes or no</p>
     * @param string $ModifyCycleValue <p>0：不修改 1：将任务的上游依赖配置改为默认值</p>
     * @param boolean $ClearLink <p>工作流存在跨工作流依赖且使用cron表达式调度。如果保存统一调度，会断开不支持的依赖关系</p>
     * @param string $MainCyclicConfig <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-时间维度，取值为：</p><ul><li>CRONTAB</li><li>DAY</li><li>HOUR</li><li>LIST_DAY</li><li>LIST_HOUR</li><li>LIST_MINUTE</li><li>MINUTE</li><li>MONTH</li><li>RANGE_DAY</li><li>RANGE_HOUR</li><li>RANGE_MINUTE</li><li>WEEK</li><li>YEAR</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
     * @param string $SubordinateCyclicConfig <p>ModifyCycleValue为1的时候生效，表示默认修改的上游依赖-实例范围<br>取值为：</p><ul><li>ALL_DAY_OF_YEAR</li><li>ALL_MONTH_OF_YEAR</li><li>CURRENT</li><li>CURRENT_DAY</li><li>CURRENT_HOUR</li><li>CURRENT_MINUTE</li><li>CURRENT_MONTH</li><li>CURRENT_WEEK</li><li>CURRENT_YEAR</li><li>PREVIOUS_BEGIN_OF_MONTH</li><li>PREVIOUS_DAY</li><li>PREVIOUS_DAY_LATER_OFFSET_HOUR</li><li>PREVIOUS_DAY_LATER_OFFSET_MINUTE</li><li>PREVIOUS_END_OF_MONTH</li><li>PREVIOUS_FRIDAY</li><li>PREVIOUS_HOUR</li><li>PREVIOUS_HOUR_CYCLE</li><li>PREVIOUS_HOUR_LATER_OFFSET_MINUTE</li><li>PREVIOUS_MINUTE_CYCLE</li><li>PREVIOUS_MONTH</li><li>PREVIOUS_WEEK</li><li>PREVIOUS_WEEKEND</li><li>RECENT_DATE</li></ul><p>https://capi.woa.com/object/detail?product=wedata&amp;env=api_dev&amp;version=2025-08-06&amp;name=WorkflowSchedulerConfigurationInfo</p>
     * @param string $ExecutionStartTime <p>执行时间左闭区间，示例：00:00，只有周期类型为MINUTE_CYCLE才需要填入</p>
     * @param string $ExecutionEndTime <p>执行时间右闭区间，示例：23:59，只有周期类型为MINUTE_CYCLE才需要填入</p>
     * @param string $CalendarOpen <p>是否开启日历调度 1 开启 0关闭</p>
     * @param string $CalendarId <p>日历id</p>
     * @param integer $MinuteOffset <p>分钟任务相位偏移</p>
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
        if (array_key_exists("ScheduleTimeZone",$param) and $param["ScheduleTimeZone"] !== null) {
            $this->ScheduleTimeZone = $param["ScheduleTimeZone"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("ModifyCycleValue",$param) and $param["ModifyCycleValue"] !== null) {
            $this->ModifyCycleValue = $param["ModifyCycleValue"];
        }

        if (array_key_exists("ClearLink",$param) and $param["ClearLink"] !== null) {
            $this->ClearLink = $param["ClearLink"];
        }

        if (array_key_exists("MainCyclicConfig",$param) and $param["MainCyclicConfig"] !== null) {
            $this->MainCyclicConfig = $param["MainCyclicConfig"];
        }

        if (array_key_exists("SubordinateCyclicConfig",$param) and $param["SubordinateCyclicConfig"] !== null) {
            $this->SubordinateCyclicConfig = $param["SubordinateCyclicConfig"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CalendarOpen",$param) and $param["CalendarOpen"] !== null) {
            $this->CalendarOpen = $param["CalendarOpen"];
        }

        if (array_key_exists("CalendarId",$param) and $param["CalendarId"] !== null) {
            $this->CalendarId = $param["CalendarId"];
        }

        if (array_key_exists("MinuteOffset",$param) and $param["MinuteOffset"] !== null) {
            $this->MinuteOffset = $param["MinuteOffset"];
        }
    }
}
